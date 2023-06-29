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
                "name" => "En esquina"
            ],
            [
                "name" => "Frente al camino"
            ],
            [
                "name" => "Comerciales"
            ],
            [
                "name" => "Dentro del predio"
            ],
            [
                "name" => "Frente a carretera"
            ]
        ]);
    }
}
