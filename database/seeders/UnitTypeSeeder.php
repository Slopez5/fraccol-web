<?php

namespace Database\Seeders;

use App\Models\UnitType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $unitTypes = [
            [
                "name" => "Casa"
            ],
            [
                "name" => "Departamento"
            ],
            [
                "name" => "Local"
            ],
            [
                "name" => "Oficina"
            ],
            [
                "name" => "Bodega"
            ],
            [
                "name" => "Nave industrial"
            ],
            [
                "name" => "Edificio"
            ],
            [
                "name" => "Casa en condominio"
            ],
            [
                "name" => "Departamento en condominio"
            ]
        ];

        UnitType::insert($unitTypes);
    }
}
