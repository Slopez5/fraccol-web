<?php

namespace Database\Seeders;

use App\Models\LoteStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoteStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $loteStatuses = [
            [
                "name" => "Disponible para venta",
                "description" => ""
            ],
            [
                "name" => "En proceso de desarrollo",
                "description" => ""
            ],
            [
                "name" => "En proceso de subdivisión",
                "description" => ""
            ],
            [
                "name" => "En proceso de aprobación municipal",
                "description" => ""
            ],
            [
                "name" => "Vendido",
                "description" => ""
            ],
            [
                "name" => "Reservado",
                "description" => ""
            ],
            [
                "name" => "En negociación",
                "description" => ""
            ],
            [
                "name" => "En proceso de limpieza/limpieza del terreno",
                "description" => ""
            ],
            [
                "name" => "En proceso de planificación",
                "description" => ""
            ],
            [
                "name" => "En proceso de construcción",
                "description" => ""
            ],
            [
                "name" => "En proceso de permisos",
                "description" => ""
            ],
            [
                "name" => "En proceso de zonificación",
                "description" => ""
            ],
            [
                "name" => "En proceso de evaluación ambiental",
                "description" => ""
            ],
            [
                "name" => "En proceso de preparación del suelo",
                "description" => ""
            ],
            [
                "name" => "En proceso de mercadeo",
                "description" => ""
            ],
            [
                "name" => "En proceso de promoción",
                "description" => ""
            ],
            [
                "name" => "En proceso de diseño",
                "description" => ""
            ],
            [
                "name" => "En espera de financiamiento",
                "description" => ""
            ],
            [
                "name" => "En espera de oferta",
                "description" => ""
            ],
            [
                "name" => "Archivado o retirado del mercado",
                "description" => ""
            ]
        ];

        LoteStatus::insert($loteStatuses);
    }
}
