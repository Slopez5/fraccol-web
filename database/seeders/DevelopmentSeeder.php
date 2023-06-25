<?php

namespace Database\Seeders;

use App\Models\Development;
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
        Development::insert([
            [
                'real_state_id' => 1,
                'name' => 'El Rehilete',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ],
            [
                'real_state_id' => 1,
                'name' => 'Monte Verde II',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ],
            [
                'real_state_id' => 1,
                'name' => 'Monte Verde III',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ],
            [
                'real_state_id' => 2,
                'name' => 'Tierra Viva',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 2,
                'name' => 'Alta Vista',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 3,
                'name' => 'Puertas de Comala',
                'location' => 'Comala',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'Verde Ladera',
                'location' => 'Colima',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 2,
                'name' => 'Palmares',
                'location' => 'Colima',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'El pedregal',
                'location' => 'Colima',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'Los Olivos',
                'location' => 'Villa de Alvares',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'El encanto',
                'location' => 'Cuahtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'Real Hacienda',
                'location' => 'Cuauhtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'Buenavista II',
                'location' => 'Cuauhtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 1,
                'name' => 'Buenavista',
                'location' => 'Cuauhtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ], [
                'real_state_id' => 2,
                'name' => 'Agua Dulce',
                'location' => 'Cuahtemoc',
                'total_land_area' => 10000.00,
                'available_lots' => 100,

            ], [
                'real_state_id' => 2,
                'name' => 'Oasis',
                'location' => 'Armeria',
                'total_land_area' => 10000.00,
                'available_lots' => 100,
            ]
        ]);
    }
}
