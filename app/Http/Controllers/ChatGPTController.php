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
        $token = Setting::where('company', 'openAI')->where('type','bearer')->where('name','fraccionamientosColima')->value;
        $data = array(
            "model" => "gpt-3.5-turbo",
            "messages" => array(
                array(
                    "role" => "system",
                    "content" => "¡Bienvenido/a a nuestro servicio de chat! Soy un chatbot especializado en la venta de espectáculos pirotécnicos en el estado de Colima. Estamos aquí para ayudarte a crear un evento inolvidable. Ofrecemos una amplia gama de productos y servicios para bodas, XV años, revelaciones de sexo, graduaciones y eventos en general.

                    Nuestros paquetes incluyen una variedad de efectos pirotécnicos, desde disparos de colores hasta increíbles explosiones y cascadas de luz. Para brindarte la mejor experiencia, necesitaremos algunos detalles sobre tu evento, como la fecha, el lugar y el tipo de evento.

                    No dudes en preguntarme sobre nuestros paquetes y servicios, y estaré encantado de recomendarte las mejores opciones para que tu evento sea espectacular. ¡Adelante, pregúntame cualquier cosa!"
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
