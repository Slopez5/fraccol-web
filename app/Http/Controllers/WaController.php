<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use Illuminate\Http\Request;

class WaController extends Controller
{

    protected $isChatGPTAvailable;

    public function __construct()
    {
        $this->isChatGPTAvailable = false;
    }

    public function envia($mensaje)
    {
        $token = 'EAACtHASQOBMBAEsEmGq9ZAZA0WH0NfpFKgz6LRKLtNcZButYmaBY0oQGBmpRN6atlWJMtzZBe1FZBJrTtNIkVAr5VZCBfDVm2PJ0eGKZAGp9OwjxKI8solv8HZC11NoNO4nl4lgxYbiX1tLWYsgZBVQzT9bj9Pm0A6G9isOg83cGzmiL90In2FdEBcDfsgz3kZBrjZBurWJZCXMERAZDZD';
        $telephone = '523122192524';
        $phoneID = '117105141416342';
        $body = $this->isChatGPTAvailable ? ChatGPTController::getResponseGPT($mensaje) : ChatController::getResponse($mensaje);
        $this->sendMessage($token, $telephone, $phoneID, $body);
    }

    private function sendMessage($bearer, $to, $phoneID, $body)
    {
        $url = 'https://graph.facebook.com/v17.0/' . $phoneID . '/messages';

        $mensaje = ''
        .'{'
        .'    "messaging_product": "whatsapp",'
        .'    "to": "523122192524",'
        .'    "type": "text",'
        .'    "recipient_type": "individual",'
        .'    "text": {'
        .'        "body": "Hola",'
        .'        "preview_url": false'
        .'    }'
        .'}';

        $header = array("Authorization: Bearer " . $bearer, "Content-Type: application/json");

        $response = CurlHelper::call($url,'GET',$mensaje,$header);

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
        $phone = $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['from'];
        $mensaje = $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
        $this->envia($mensaje);
    }
}
