<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaController extends Controller
{

    public function envia($template) {
        $token = '';
        $telephone = '';

        $url = 'https://graph.facebook.com/v17.0/103971779304849/messages';

        $mensaje = '';

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
