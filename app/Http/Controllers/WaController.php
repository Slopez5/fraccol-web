<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use Illuminate\Http\Request;

class WaController extends Controller
{

    protected $isChatGPTAvailable;

    public function __construct()
    {
        $this->isChatGPTAvailable = true;
    }

    public function envia($mensaje)
    {
        $token = 'EAACtHASQOBMBALZABg1w1QurYMtVg5UZCdDq9cmHcgievrcIpI1DChhbR7SGci6rSZB4k3ZBhCA2DaM9x1Llepui7g8vjFhR1m8E9HD8faf6FYbxpu29gvCXaf3xoXOyQM9u9tnogNumNZCViiad99C97gVu5ZAkZAzzZCiWNCaSZAqk2JPNXX1bdzI5DZCajed2fbgxZAnZCFEISgZDZD';
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
