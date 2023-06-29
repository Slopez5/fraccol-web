<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use App\Models\Setting;
use Illuminate\Http\Request;

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
        $telephone = $data['phone'];
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

        return $response;
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
        logger($respuesta);
    }
}
