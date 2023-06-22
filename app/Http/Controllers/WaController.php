<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaController extends Controller
{

    public function envia($mensaje)
    {
        $token = 'EAAWai40l2qwBAKfB5I2SmQPJzyYgBgXmBbgONpx7b7ZBBktNh4nRjdOIojeaUsVECt2bGZAC9nXZA1Mgj2mpcXMAKw3SzzQ30tfbAMklIFg5ZC2ql9DQigju8tZCTy1phQYlHxTmoYi49XZA7mWDVtyGQR74NOmPIw5Ok2hfEovIzFZARVemqT8xvZCTJkpxvvUka9vmWZAhebgZDZD';
        $telephone = '523122192524';
        $phoneID = '117105141416342';
        $body = "";
        $this->sendMessage($token, $telephone, $phoneID, $body);
    }

    private function getResponseGPT($mensaje)
    {
        $curl = curl_init();

        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => array(
                array(
                    "role" => "system",
                    "content" => ""
                ),
                array(
                    "role" => "user",
                    "content" => ""
                )
            )
        );

        $data = json_encode($data);

        $headers = array(
            "Content-Type: application/json",
            "Authorization: Bearer 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" // Reemplaza $bearer con tu token de autorización real
        );

        curl_setopt($curl, CURLOPT_URL, "https://api.openai.com/v1/chat/completions");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response);
        $messageContent = $response->choices[0]->message->content;
        return $messageContent;
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

        $curl =  curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = json_decode(curl_exec($curl), true);

        $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);
    }

    public function webhook()
    {
        $token = 'HolaNovato';
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
        $mensaje = "Telefono:" . $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['from'] . "\n";
        $mensaje .= "Mensaje:" . $respuesta['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
        $this->envia($mensaje);
    }
}
