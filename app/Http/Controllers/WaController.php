<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use App\Models\ApiMonitoringLog;
use App\Models\Setting;
use App\Models\WhatsappChat;
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
        $this->token = Setting::where('company', 'whatsapp')->where('type','bearer')->where('name','fraccionamientosColima')->get()[0]->value;
        $this->phoneID = Setting::where('company', 'whatsapp')->where('type','phoneID')->where('name','fraccionamientosColima')->get()[0]->value;;
    }

    public function envia($data)
    {
        $telephone = $data['from'];
        $body = $this->isChatGPTAvailable ? ChatGPTController::getResponseGPT($data['message']) : ChatController::getResponse($data);
        $this->sendMessage( $telephone, $body);
    }

    private function sendMessage( $to, $body)
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
        $responseString =json_encode($response["response"]);
        $this->saveChat(false,null,$data["from"],null,$body);
        $this->saveApiLog($url,"POST",json_encode($data),$response["status_code"],$responseString);
        return $response;
    }

    private function saveApiLog($url,$method,$request,$status,$response){
        $apiLog = new ApiMonitoringLog();
        $apiLog->request_url = $url;
        $apiLog->request_method = $method;
        $apiLog->request_payload = $request;
        $apiLog->response_code = $status;
        $apiLog->response_payload = $response;
        $apiLog->save();
    }

    private function saveChat($isUser = false, $whatsapp_business_account_id,$phone,$profile_name,$value){
        $chat = new WhatsappChat();
        $chat->phoneID = $this->phoneID;
        $chat->phone = $phone;
        if ($isUser) {
            $chat->whatsapp_business_id = $whatsapp_business_account_id;
            $chat->profile_name = $profile_name;
        }

        $chat->value = $value;
        $chat->save();
    }

    public function webhook()
    {
        $token = Setting::where('company', 'whatsapp')->where('type','token')->where('name','fraccionamientosColima')->get()[0]->value;
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

    public function readResponse($response){
        if (isset($response->entry)){
            if (count($response->entry) > 0) {
                $whatsapp_business_account_id = $response->entry[0]->id;
                if (isset($response->entry[0]->changes)) {
                    if (count($response->entry[0]->changes) > 0) {
                        if ($response->entry[0]->changes[0]->field == "messages") {
                            if (isset($response->entry[0]->changes[0]->value->messages)) {
                                $message = $response->entry[0]->changes[0]->value->messages[0];
                                $contact = $response->entry[0]->changes[0]->value->contacts[0];
                                $metadata = $response->entry[0]->changes[0]->value->metadata;

                                $text = $message->text->body;
                                $from = substr($message->from, 0, 2) . substr($message->from, 3);
                                $profile = $contact->profile->name;

                                $data = [
                                    "whatsapp_business_account_id" => $whatsapp_business_account_id,
                                    "message" => $text,
                                    "from" => $from,
                                    "profile" => $profile
                                ];
                                $this->saveChat(true,$data["whatsapp_business_account_id"],$data["from"],$data["profile"],$data["message"]);
                                $this->envia($data);
                            }

                        }
                    }
                }
            }
        }
    }
}
