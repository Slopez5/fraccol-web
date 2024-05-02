<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User([
            "role_id" => 2,
            "username" => "inface",
            "first_name" => "Inface Desarrollos",
            "last_name" => "",
            "phone" => "3123094127",
            "email" => "admin@inface.com",
            "password" => bcrypt("\$InfaceDesarrollos\$")
        ]);
        $user->save();
    }
}
