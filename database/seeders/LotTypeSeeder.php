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
                "description" => ""
            ],
            [
                "name" => "Frente al camino",
                "description" => ""
            ],
            [
                "name" => "Comerciales",
                "description" => ""
            ],
            [
                "name" => "Dentro del predio",
                "description" => ""
            ],
            [
                "name" => "Frente a carretera",
                "description" => ""
            ]
        ]);
    }
}
