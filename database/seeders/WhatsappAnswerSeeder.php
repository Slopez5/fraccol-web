<?php

namespace Database\Seeders;

use App\Models\WhatsappAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhatsappAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        WhatsappAnswer::insert([
            [
                "whatsapp_question_id" => 1,
                "whatsapp_next_question_id" => 2,
                "answer" => "Cliente Nuevo",
                "value" => 1
            ],
            [
                "whatsapp_question_id" => 2,
                "whatsapp_next_question_id" => 3,
                "answer" => "Fiesta Privada",
                "value" => 1
            ],
            [
                "whatsapp_question_id" => 2,
                "whatsapp_next_question_id" => 3,
                "answer" => "Evento Empresarial",
                "value" => 2
            ],
            [
                "whatsapp_question_id" => 2,
                "whatsapp_next_question_id" => 3,
                "answer" => "Boda",
                "value" => 3
            ],
            [
                "whatsapp_question_id" => 2,
                "whatsapp_next_question_id" => 4,
                "answer" => "Otro tipo de evento",
                "value" => 4
            ],
            [
                "whatsapp_question_id" => 1,
                "whatsapp_next_question_id" => 5,
                "answer" => "Cliente Existente",
                "value" => 2
            ],
            [
                "whatsapp_question_id" => 5,
                "whatsapp_next_question_id" => 6,
                "answer" => "Consultar disponibilidad de paquetes",
                "value" => 1
            ],
            [
                "whatsapp_question_id" => 5,
                "whatsapp_next_question_id" => 7,
                "answer" => "Realizar una reserva",
                "value" => 2
            ],
            [
                "whatsapp_question_id" => 5,
                "whatsapp_next_question_id" => 8,
                "answer" => "Consultar detalles de un pedido existente",
                "value" => 3
            ],
            [
                "whatsapp_question_id" => 5,
                "whatsapp_next_question_id" => 9,
                "answer" => "Otra consulta relacionada con un pedido",
                "value" => 4
            ],
            [
                "whatsapp_question_id" => 1,
                "whatsapp_next_question_id" => 10,
                "answer" => "Proveedor",
                "value" => 3
            ],
            [
                "whatsapp_question_id" => 10,
                "whatsapp_next_question_id" => 11,
                "answer" => "Proveedor existente",
                "value" => 1
            ],
            [
                "whatsapp_question_id" => 10,
                "whatsapp_next_question_id" => 12,
                "answer" => "Proveedo nuevor",
                "value" => 2
            ],
            [
                "whatsapp_question_id" => 1,
                "whatsapp_next_question_id" => 13,
                "answer" => "Colaborador",
                "value" => 4
            ],
            [
                "whatsapp_question_id" => 1,
                "whatsapp_next_question_id" => 14,
                "answer" => "Colaborador existente",
                "value" => 1
            ],
            [
                "whatsapp_question_id" => 1,
                "whatsapp_next_question_id" => 15,
                "answer" => "Colaborador nuevo",
                "value" => 2
            ]
        ]);
    }
}
