<?php

namespace Database\Seeders;

use App\Models\Development;
use App\Models\Subdomain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $developments = [
            [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'El Rehilete',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => "Ubicado en el pueblo mágico de Comala, lleno de tradición y gastronomía única,es un fraccionamiento el cual consta de lotes comerciales,habitacionales y en esquina; cuyas medidas van desde los 144 metros.
                Precios de contado de $2,020.00 el metro cuadrado (comerciales y esquina) y $1,920.00 el metro cuadrado (habitacionales).
                Financiamiento accesible para tu bolsillo que va de 1 a 5 años.

                No dejes ir esta oportunidad de hacer tu sueño realidad y tener tu propia casa/negocio."
            ],
            [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Monte Verde II',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ],
            [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Monte Verde III',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ],
            [
                'real_estate_id' => 2,
                'real_estate_branch_id' => 1,
                'name' => 'Tierra Viva',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 2,
                'real_estate_branch_id' => 1,
                'name' => 'Alta Vista',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 3,
                'real_estate_branch_id' => 1,
                'name' => 'Puertas de Comala',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Verde Ladera',
                'location' => 'Colima',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 2,
                'real_estate_branch_id' => 1,
                'name' => 'Palmares',
                'location' => 'Colima',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'El pedregal',
                'location' => 'Colima',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Los Olivos',
                'location' => 'Villa de Alvares',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'El encanto',
                'location' => 'Cuahtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Real Hacienda',
                'location' => 'Cuauhtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Buenavista II',
                'location' => 'Cuauhtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 1,
                'real_estate_branch_id' => 1,
                'name' => 'Buenavista',
                'location' => 'Cuauhtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ], [
                'real_estate_id' => 2,
                'real_estate_branch_id' => 1,
                'name' => 'Agua Dulce',
                'location' => 'Cuahtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''

            ], [
                'real_estate_id' => 2,
                'real_estate_branch_id' => 1,
                'name' => 'Oasis',
                'location' => 'Armeria',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
                'total_lots' => 200,
                'sort_description' => ''
            ]
        ];
        Development::insert($developments);
    }
}
