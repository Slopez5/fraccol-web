<?php

namespace Database\Seeders;

use App\Models\DevelopmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $developmentType = [
            [
                "name" => "Desarrollo residencial unifamiliar",
                "description" => "",
            ],
            [
                "name" => "Desarrollo residencial multifamiliar",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de condominios",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de apartamentos",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas adosadas",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de complejos turísticos",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de urbanizaciones cerradas",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de comunidades de jubilación",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas sostenibles/ecológicas",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas de lujo",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas accesibles",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas de transición",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas modulares",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas prefabricadas",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de viviendas de rehabilitación urbana",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de proyectos mixtos (residencial-comercial)",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de parques industriales",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de centros comerciales",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de espacios de oficinas",
                "description" => ""
            ],
            [
                "name" => "Desarrollo de proyectos de infraestructura (carreteras, puentes, etc.)",
                "description" => ""
            ]
        ];

        DevelopmentType::insert($developmentType);
    }
}
