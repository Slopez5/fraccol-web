<?php

namespace App\Http\Controllers;

use App\Helpers\CurlHelper;
use App\Models\Setting;
use Illuminate\Http\Request;

class ChatGPTController extends Controller
{
    //

    static function getResponseGPT($mensaje)
    {
        $token = Setting::where('company', 'openAI')->where('type','bearer')->where('name','fraccionamientosColima')->get()[0]->value;
        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => array(
                array(
                    "role" => "system",
                    "content" => ""
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

        $response = CurlHelper::call("https://api.openai.com/v1/chat/completions", 'POST', $data, $headers);
        $response = json_decode($response);
        $messageContent = $response->choices[0]->message->content;
        return $messageContent;
    }
}
