<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use Illuminate\Http\Request;

class ChatGPTController extends Controller
{
    //

    static function getResponseGPT($mensaje)
    {
        $token = "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";
        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => array(
                array(
                    "role" => "system",
                    "content" => "eres un chatbot para una empresa que se dedica a la venta de espectaculos pirotecnicos en el estado de Colima para bodas, XV, Revelaciones de sexo, graduaciones y eventos en general"
                ),
                array(
                    "role" => "user",
                    "content" => $mensaje
                )
            )
        );

        $data = json_encode($data);
        $headers = array(
            "Content-Type: application/json",
            "Authorization: Bearer " . $token
        );

        $response = CurlHelper::call("https://api.openai.com/v1/chat/completions",'POST',$data,$headers);
        $response = json_decode($response);
        $messageContent = $response->choices[0]->message->content;
        return $messageContent;
    }
}
