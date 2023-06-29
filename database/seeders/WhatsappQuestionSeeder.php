<?php

namespace Database\Seeders;

use App\Models\WhatsappQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhatsappQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        WhatsappQuestion::insert([
            [
                "phoneID" => "103971779304849",
                "title" => "¡Hola! Soy un asistente virtual de Pirotecnia San Rafael. ¿Cómo puedo ayudarte hoy?",
                "question" => "¿Con cual de los siguientes usuarios te identificas?",
                "is_first_question" => true
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "¿Qué tipo de evento estás planeando?",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "A continuación se muestra una lista de nuestros paquetes disponibles para fiestas:",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciona más detalles sobre tu evento y un representante de Pirotecnia San Rafael se comunicará contigo para discutir las opciones y precios disponibles.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "¿En qué podemos ayudarte hoy?",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciona la fecha y ubicación de tu evento, así como cualquier requisito adicional, y te informaremos sobre la disponibilidad de los paquetes de Pirotecnia San Rafael.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciona la fecha, ubicación y paquete que deseas reservar, así como tus datos de contacto. Un representante de Pirotecnia San Rafael se comunicará contigo para completar la reserva.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciona el número de pedido o cualquier información adicional relevante sobre tu pedido, y te proporcionaremos los detalles correspondientes de Pirotecnia San Rafael.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, describe tu consulta detalladamente, y un representante de Pirotecnia San Rafael se comunicará contigo para brindarte asistencia y resolver tus inquietudes relacionadas con tu pedido actual en Pirotecnia San Rafael.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "¿Eres un proveedor existente o nuevo?",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciónanos tu número de proveedor o cualquier información adicional relevante, y un representante de Pirotecnia San Rafael se comunicará contigo para brindarte asistencia y discutir cualquier asunto relacionado con nuestra colaboración actual.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciónanos tus datos de contacto y detalles sobre los productos o servicios que ofreces como proveedor. Un representante de Pirotecnia San Rafael se comunicará contigo para discutir oportunidades de colaboración.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "¿Eres un colaborador existente o nuevo?",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciónanos tu número de colaborador o cualquier información adicional relevante, y un representante de Pirotecnia San Rafael se comunicará contigo para brindarte asistencia y discutir cualquier asunto relacionado con nuestra colaboración actual.",
                "is_first_question" => false
            ],
            [
                "phoneID" => "103971779304849",
                "title" => null,
                "question" => "Por favor, proporciónanos tus datos de contacto y detalles sobre la colaboración que estás buscando. Un representante de Pirotecnia San Rafael se comunicará contigo para discutir las posibilidades de colaboración.",
                "is_first_question" => false
            ]
            ]);
    }
}
