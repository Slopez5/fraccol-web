<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        City::insert([
            [
                "state_id" => 1,
                "name"=>"Colima"
            ],
            [
                "state_id" => 1,
                "name"=>"Cuauhtemoc"
            ],
            [
                "state_id" => 1,
                "name"=>"Comala"
            ],
            [
                "state_id" => 1,
                "name"=>"Villa de Alvarez"
            ],
            [
                "state_id" => 1,
                "name"=>"Coquimatlan"
            ],
            [
                "state_id" => 1,
                "name"=>"Ixtlahuacan"
            ],
            [
                "state_id" => 1,
                "name"=>"Minatitlan"
            ],
            [
                "state_id" => 1,
                "name"=>"Tecoman"
            ],
            [
                "state_id" => 1,
                "name"=>"Manzanillo"
            ],
            [
                "state_id" => 1,
                "name"=>"Armeria"
            ]
        ]);
    }
}
