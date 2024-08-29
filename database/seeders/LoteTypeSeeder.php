<?php

namespace Database\Seeders;

use App\Models\LoteType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LoteType::insert([
            [
                "name" => "Estandar",
                "description" => "Lote Estandar"
            ],
            [
                "name" => "Lote en esquina",
                "description" => "Lote en esquina"
            ],
            [
                "name" => "Comerciales",
                "description" => "Lote comercial"
            ],
            [
                "name" => "Dentro del predio",
                "description" => "Lote dentro del predio"
            ],
            [
                "name" => "Frente a carretera",
                "description" => "lote frente a carretera"
            ]
        ]);
    }
}
