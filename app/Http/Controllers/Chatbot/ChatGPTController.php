<?php

namespace App\Http\Controllers\Chatbot;

use App\Helpers\CurlHelper;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ChatGPTController extends Controller
{
    //

    static function getResponseGPT($mensaje)
    {
        $token = Setting::where('company', 'openAI')->where('type','bearer')->where('name','fraccionamientosColima')->get()[0]->value;
        $data = [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Extrae el Nombre completo de un texto que te proporcionare, deberas imprimir el puro nombre completo',
                ],
                [
                    'role' => 'user',
                    'content' => $mensaje,
                ]
            ]
        ];
        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer " . $token
        ];
        $response = CurlHelper::call("https://api.openai.com/v1/chat/completions", 'POST', $data, $headers);
        $response = json_decode($response["response"]);
        $messageContent = $response->choices[0]->message->content;
        return $messageContent;
    }
}
