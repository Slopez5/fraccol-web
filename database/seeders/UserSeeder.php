<?php

namespace Database\Seeders;

use App\Classes\RoleType;
use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert(
            [
                [
                    "role_id" => RoleType::ADMIN,
                    "username" => "root",
                    "first_name" => "Sergio Omar",
                    "last_name" => "Lopez Ceballos",
                    "phone" => "3121769109",
                    "email" => "admin@fraccionamientoscolima.com",
                    "password" => bcrypt("Locs9506068k3")
                ],
                [
                    "role_id" => RoleType::REAL_ESTATE,
                    "username" => "inface",
                    "first_name" => "Inface",
                    "last_name" => "Desarrollos",
                    "phone" => "3121769109",
                    "email" => "admin@inface.com", 
                    "password" => bcrypt("\$InfaceDesarrollos\$")
                ],
            ]
        );
    }
}
