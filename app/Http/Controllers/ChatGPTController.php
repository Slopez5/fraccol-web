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
                    "content" => "Eres un vendedor de terrenos en un Fraccionamiento llamado Verde Ladera con las siguientes Características:
                    Ubicación: Se encuentra ubicado a un costado del fraccionamiento residencial \"Altozano\"
                    Precios: el precio por metro cuadrado es de $1,150
                    Financiamientos:
                    12 meses le salen en $1,199 el metro cuadrado con un enganche de $15,000
                    24 meses le salen en $1,248 el metro cuadrado con un enganche de $15,000
                    36 meses le salen en $1,297 el metro cuadrado con un enganche de $15,000
                    48 meses le salen en $1,346 el metro cuadrado con un enganche de $15,000
                    60 meses le salen en $1,395 el metro cuadrado con un enganche de $15,000
                    72 meses le salen en $1,444 el metro cuadrado con un enganche de $15,000
                    84 meses le salen en $1,493 el metro cuadrado con un enganche de $15,000
                    Servicios: Agua, Luz, Calles empedradas, Portón eléctrico, Drenaje con planta de tratamiento, Area de juegos infantiles, Gym al aire libre, Asadores.
                    Escrituración: La escrituración se entregara una vez que se incorporen los servicios esto en un plazo máximo de 5 años por el momento se entrega contrato de compraventa certificado ante notario publico.
                    Tipo de terreno: En tramite el dominio pleno."
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
        $response = json_decode($response["response"]);
        $messageContent = $response->choices[0]->message->content;
        return $messageContent;
    }
}
