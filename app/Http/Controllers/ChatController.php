<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    static public function getResponse($data) {
        $category = ChatController::detectarCategoria($data["message"]);

        switch ($category) {
            case 'saludo':
                return "estas saludando";
            case 'información':
                return "estas pidiendo información";
            default:
                return $data['message'];
        }
    }

    static private function detectarCategoria($texto)
    {

        $categorias = [
            'saludo' => ['buenos dias','buenas tardes','buenas noches'],
            'información' => ['informacion', 'información', 'disponibles','disponible'],
        ];

        foreach ($categorias as $categoria => $palabrasClave) {
            foreach ($palabrasClave as $palabra) {
                if (stripos($texto, $palabra) !== false) {
                    return $categoria;
                }
            }
        }

        return 'Categoría no detectada';
    }
}
