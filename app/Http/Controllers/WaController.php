<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use Illuminate\Http\Request;

class WaController extends Controller
{

    protected $isChatGPTAvailable;
    protected $token;
    protected $phoneID;

    public function __construct()
    {
        $this->isChatGPTAvailable = false;
        $this->token = 'EAACtHASQOBMBAEsEmGq9ZAZA0WH0NfpFKgz6LRKLtNcZButYmaBY0oQGBmpRN6atlWJMtzZBe1FZBJrTtNIkVAr5VZCBfDVm2PJ0eGKZAGp9OwjxKI8solv8HZC11NoNO4nl4lgxYbiX1tLWYsgZBVQzT9bj9Pm0A6G9isOg83cGzmiL90In2FdEBcDfsgz3kZBrjZBurWJZCXMERAZDZD';
        $this->phoneID = '117105141416342';
    }

    public function envia($data)
    {
        $telephone = $data->phone;
        $body = $this->isChatGPTAvailable ? ChatGPTController::getResponseGPT($data->message) : ChatController::getResponse($data->mensaje);
        $this->sendMessage( $telephone, $body);
    }

    private function sendMessage( $to, $body)
    {
        $url = 'https://graph.facebook.com/v17.0/' . $this->phoneID . '/messages';

        $mensaje = ''
            . '{'
            . '    "messaging_product": "whatsapp",'
            . '    "to": "'. $to .'",'
            . '    "type": "text",'
            . '    "recipient_type": "individual",'
            . '    "text": {'
            . '        "body": "'. $body .'",'
            . '        "preview_url": false'
            . '    }'
            . '}';

        $header = array("Authorization: Bearer " . $this->token, "Content-Type: application/json");

        $response = CurlHelper::call($url, 'GET', $mensaje, $header);

        return $response;
    }

    public function webhook()
    {
        $token = 'FraccionamientosColima';
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
        $respuesta = json_decode($respuesta, true);
        $wbID = $respuesta['entry'][0]['id'];
        $profile_name = $respuesta['entry'][0]['changes'][0]['value']['contacts'][0]['profile']['name'];
        $phone = $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['from'];
        $message = $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
        $data = collect(["wbID" => $wbID, "profile_name" => $profile_name, "phone" => $phone, "message" => $message]);
        $this->envia($data);
    }
}
