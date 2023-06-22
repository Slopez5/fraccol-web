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
        $token = 'EAAWai40l2qwBAKfB5I2SmQPJzyYgBgXmBbgONpx7b7ZBBktNh4nRjdOIojeaUsVECt2bGZAC9nXZA1Mgj2mpcXMAKw3SzzQ30tfbAMklIFg5ZC2ql9DQigju8tZCTy1phQYlHxTmoYi49XZA7mWDVtyGQR74NOmPIw5Ok2hfEovIzFZARVemqT8xvZCTJkpxvvUka9vmWZAhebgZDZD';
        $telephone = '523122192524';
        $phoneID = '117105141416342';
        $body = $this->isChatGPTAvailable ? ChatGPTController::getResponseGPT($mensaje) : ChatController::getResponse($mensaje);
        $this->sendMessage($token, $telephone, $phoneID, $body);
    }

    private function sendMessage($bearer, $to, $phoneID, $body)
    {
        $url = 'https://graph.facebook.com/v17.0/' . $phoneID . '/messages';

        $mensaje = ''
            . '{'
            . '"messaging_product": "whatsapp", '
            . '"to": "' . $to . '", '
            . '"recipient_type": "individual", '
            . '"type": "text", '
            . '"text": '
            . '{'
            . '     "preview_url": false,'
            . '     "body": "' . $body . '",'
            . '} '
            . '}';

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
