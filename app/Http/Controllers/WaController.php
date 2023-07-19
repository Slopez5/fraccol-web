<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use App\Models\ApiMonitoringLog;
use App\Models\Setting;
use App\Models\WhatsappChat;
use App\Models\WhatsappQuestion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class WaController extends Controller
{

    protected $isChatGPTAvailable;
    protected $token;
    protected $phoneID;

    public function __construct()
    {
        $this->isChatGPTAvailable = false;
        $this->token = Setting::where('company', 'whatsapp')->where('type', 'bearer')->where('name', 'fraccionamientosColima')->get()[0]->value;
        $this->phoneID = Setting::where('company', 'whatsapp')->where('type', 'phoneID')->where('name', 'fraccionamientosColima')->get()[0]->value;;
    }

    public function envia($data)
    {
        $telephone = $data['from'];
        $response = $this->isChatGPTAvailable ? ChatGPTController::getResponseGPT($data['message']) : ChatController::getResponse($data);
        if ($response["message"] != "") {
            $this->sendMessage($telephone, $response["message"], $response["id"]);
        }
    }

    private function addDNS()
    {
        $url = 'https://api.linode.com/v4/domains/2335969/records';
        $data = [
            'type' => 'A',
            'name' => 'palmares',
            'target' => '45.79.23.241',
            'priority' => 0,
            'weight' => 0,
            'port' => 0,
            'service' => null,
            'protocol' => null,
            'ttl_sec' => 0
        ];
        $header = array("Authorization: Bearer 3314a935d434235467b5b3ab99d82ac32b28ebc5ed0a1090850d732b4fe0cc2a", "Content-Type: application/json");
        $response = CurlHelper::call($url, 'GET', $data, $header);
    }

    private function sendMessage($to, $body, $questionId)
    {
        $url = 'https://graph.facebook.com/v17.0/' . $this->phoneID . '/messages';

        $data = [
            'messaging_product' => 'whatsapp',
            'to' => $to,
            'type' => 'text',
            'recipient_type' => 'individual',
            'text' => [
                'body' => $body,
                'preview_url' => false,
            ],
        ];

        $header = array("Authorization: Bearer " . $this->token, "Content-Type: application/json");

        $response = CurlHelper::call($url, 'GET', $data, $header);
        $responseString = json_encode(json_decode($response["response"]));
        $this->saveChat(false, null, $to, null, $body, $questionId);
        $this->saveApiLog($url, "POST", json_encode($data), $response["status_code"], $responseString);
        return $response;
    }

    private function saveApiLog($url, $method, $request, $status, $response)
    {
        $apiLog = new ApiMonitoringLog();
        $apiLog->request_url = $url;
        $apiLog->request_method = $method;
        $apiLog->request_payload = $request;
        $apiLog->response_code = $status;
        $apiLog->response_payload = $response;
        $apiLog->save();
    }

    private function saveChat($isUser = false, $data)
    {
        $chat = new WhatsappChat();
        $chat->phoneID = $this->phoneID;
        $chat->phone = $data["from"];
        $chat->whatsapp_question_id = $this->getLastQuestionID($data["whatsapp_business_account_id"], $data["from"]);
        if ($isUser) {
            $chat->whatsapp_business_id = $data["whatsapp_business_account_id"];
            $chat->profile_name = $data["profile"];
        } else {
            $chat->whatsapp_business_id = null;
            $chat->profile_name = null;
        }
        if ($data["message"] == null) {
            $chat->value = "";
        } else {
            $chat->value = $data["message"];
        }
        $chat->is_answer = $isUser;

        $chat->save();
    }

    private function getLastQuestionID($wbID, $phone)
    {
        $chat = WhatsappChat::whereNull('whatsapp_business_id')
            ->where('phone', $phone)
            ->where('is_answer', 0)
            ->whereNotNull('whatsapp_question_id')
            ->latest()->first();
        if ($chat) {
            return $chat->whatsapp_question_id;
        }
        return null;
    }

    public function webhook()
    {
        $token = Setting::where('company', 'whatsapp')->where('type', 'token')->where('name', 'fraccionamientosColima')->get()[0]->value;
        $hub_challenge = isset($_GET['hub_challenge']) ? $_GET['hub_challenge'] : '';
        $hub_verify_token = isset($_GET['hub_verify_token']) ? $_GET['hub_verify_token'] : '';
        if ($token === $hub_verify_token) {
            echo $hub_challenge;
            exit;
        }
    }

    public function recibe()
    {
        $respuesta = file_get_contents("php://input");
        if ($respuesta == null) {
            exit;
        }
        $respuesta = json_decode($respuesta);
        $apiLog = new ApiMonitoringLog();
        $apiLog->request_url = "whatsapp_webhook";
        $apiLog->request_method = "webhook";
        $apiLog->request_payload = "webhook";
        $apiLog->response_code = 0;
        $apiLog->response_payload = json_encode($respuesta);
        $apiLog->save();
        $this->readResponse($respuesta);
    }

    public function readResponse($response)
    {
        if (isset($response->entry)) {
            if (count($response->entry) > 0) {
                $whatsapp_business_account_id = $response->entry[0]->id;
                $changes = $response->entry[0]->changes;
                if (isset($changes) & count($changes) > 0) {
                    $value = $changes[0]->value;
                    $field = $changes[0]->field;
                    if (isset($value->statuses)) {
                    } else if (isset($value->messages)) {
                        if (count($value->messages) > 0) {
                            $message = $value->messages[0];
                            $contact = $value->contacts[0];
                            $metadata = $value->metadata;
                            switch ($message->type) {
                                case "text":
                                    $data = $this->getTextMessage($message);
                                    break;
                                case "interactive":
                                    $this->getInteractiveMessage($message);
                                    break;
                                default:
                                    break;
                            }
                            $data["profile"] = $contact->profile->name;
                            $data["whatsapp_business_account_id"] =  $whatsapp_business_account_id;
                            $this->saveChat(true, $data);
                            $this->envia($data);
                        }
                    }
                }
            }
        }
    }

    private function getTextMessage($message)
    {
        $text = $message->text->body;
        $from = substr($message->from, 0, 2) . substr($message->from, 3);
        return [
            "message" => $text,
            "from" => $from,
        ];
    }
    private function getInteractiveMessage($message)
    {
    }
}
