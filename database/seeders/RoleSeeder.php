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
                "name"=>"Admin",
                "description"=>"Administrador del sistema",
            ],
            [
                "name"=>"Inmobiliaria",
                "description"=>"Inmobiliaria",
            ],
            [
                "name"=>"Secretaria",
                "description"=>"Secretaria",
            ],
            [
                "name"=>"Encargado",
                "description"=>"Encargado de fraccionamiento",
            ],
            [
                "name"=>"Vendedor",
                "description"=>"Vendedor",
            ],
            [
                "name"=>"Cliente",
                "description"=>"Cliente",
            ]
        ]);
    }
}
