<?php

namespace Database\Seeders;

use App\Models\LotType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LotTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LotType::insert([
            [
                "name" => "En esquina",
                "description" => "Lote en esquina"
            ],
            [
                "name" => "Frente al camino",
                "description" => "Lote frente a camino"
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
