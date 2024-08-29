<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::insert([
            [
                "name"=>"Root",
                "description"=>"Administrador del sistema",
            ],
            [
                "name"=>"Real_Estate",
                "description"=>"Inmobiliaria",
            ],
            [
                "name"=>"Real_Estate_Agent",
                "description"=>"Agente inmobiliario",
            ],
            [
                "name"=>"Development_Manager",
                "description"=>"Encargado de Fraccionamiento",
            ],
            [
                "name"=>"Secretary",
                "description"=>"Secretario/a",
            ],
            [
                "name"=>"Cliente",
                "description"=>"Cliente",
            ]
        ]);
    }
}
