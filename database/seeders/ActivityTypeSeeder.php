<?php

namespace Database\Seeders;

use App\Models\ActivityType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ActivityType::insert([
            [
                "name" => "Llamada telefónica de seguimiento",
                "description" => ""
            ],
            [
                "name" => "Correo electrónico de seguimiento",
                "description" => ""
            ],
            [
                "name" => "Mensaje de texto de seguimiento",
                "description" => ""
            ],
            [
                "name" => "Visita personal al cliente",
                "description" => ""
            ],
            [
                "name" => "Visita a propiedades con el cliente",
                "description" => ""
            ],
            [
                "name" => "Envío de información adicional sobre propiedades",
                "description" => ""
            ],
            [
                "name" => "Invitación a eventos inmobiliarios (ferias, exhibiciones, etc.)",
                "description" => ""
            ],
            [
                "name" => "Seguimiento en redes sociales (mensaje directo, comentario, etc.)",
                "description" => ""
            ],
            [
                "name" => "Reunión virtual (videoconferencia)",
                "description" => ""
            ],
            [
                "name" => "Envío de boletines informativos o noticias del mercado inmobiliario",
                "description" => ""
            ],
            [
                "name" => "Presentación de propuestas personalizadas",
                "description" => ""
            ],
            [
                "name" => "Seguimiento después de una oferta o contrapropuesta",
                "description" => ""
            ],
            [
                "name" => "Recordatorio de citas pendientes",
                "description" => ""
            ],
            [
                "name" => "Seguimiento posterior a la visita de una propiedad",
                "description" => ""
            ],
            [
                "name" => "Asistencia en la obtención de financiamiento hipotecario",
                "description" => ""
            ],
            [
                "name" => "Seguimiento para obtener referencias de clientes potenciales adicionales",
                "description" => ""
            ],
            [
                "name" => "Seguimiento para ofrecer servicios de postventa (recomendaciones de servicios locales, mantenimiento, etc.)",
                "description" => ""
            ],
            [
                "name" => "Invitación a seminarios o talleres relacionados con la compra/venta de propiedades",
                "description" => ""
            ],
            [
                "name" => "Envío de testimonios de clientes satisfechos",
                "description" => ""
            ],
            [
                "name" => "Envío de contenido educativo sobre el proceso de compra/venta de propiedades.",
                "description" => ""
            ]
        ]);
    }
}
