<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaController extends Controller
{

    public function envia($template) {
        $token = 'EAAWai40l2qwBAKfB5I2SmQPJzyYgBgXmBbgONpx7b7ZBBktNh4nRjdOIojeaUsVECt2bGZAC9nXZA1Mgj2mpcXMAKw3SzzQ30tfbAMklIFg5ZC2ql9DQigju8tZCTy1phQYlHxTmoYi49XZA7mWDVtyGQR74NOmPIw5Ok2hfEovIzFZARVemqT8xvZCTJkpxvvUka9vmWZAhebgZDZD';
        $telephone = '523122192524';

        $url = 'https://graph.facebook.com/v17.0/103971779304849/messages';

        $mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telephone.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "hello_world",'
        . '     "language": { "code": "en_US" } '
        . '} '
        . '}';

        $header = array("Authorization: Bearer " . $token, "Content-Type: application/json");

        $curl =  curl_init();

        curl_setopt($curl,CURLOPT_URL, $url);
        curl_setopt($curl,CURLOPT_POSTFIELDS, $mensaje);
        curl_setopt($curl,CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

        $response = json_decode(curl_exec($curl), true);

        $status_code = curl_getinfo($curl,CURLINFO_HTTP_CODE);

        curl_close($curl);
    }

    public function webhook(){
        $token = 'HolaNovato';
        $hub_challenge = isset($_GET['hub_challenge']) ? $_GET['hub_challenge'] : '';
        $hub_verify_token = isset($_GET['hub_verify_token']) ? $_GET['hub_verify_token'] : '';
        if ($token === $hub_verify_token) {
            echo $hub_challenge;
            exit;
        }
    }

    public function recibe(){
        $respuesta = file_get_contents("php://input");
        if($respuesta==null){
            exit;
        }
        $respuesta = json_decode($respuesta, true);
        $mensaje="Telefono:".$respuesta['entry'][0]['changes'][0]['value']['messages'][0]['from']."\n";
        $mensaje.="Mensaje:".$respuesta['entry'][0]['changes'][0]['value']['messages'][0]['text']['body'];
        logger($mensaje);
    }
}
