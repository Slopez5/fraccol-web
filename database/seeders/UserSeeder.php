<?php

namespace Database\Seeders;

use App\Models\Subdomain;
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
        $users = [
            [
                "role_id" => 1,
                "username" => "slopez",
                "first_name" => "sergio omar",
                "last_name" => "lopez ceballos",
                "phone" => "3122250707",
                "email" => "slopez@gmail.com",
                "password" => bcrypt("Colima2023"),
            ],
            [
                "role_id" => 2,
                "username" => "DELOA",
                "first_name" => "FRANCISCO",
                "last_name" => "DE LOA",
                "phone" => "3122250707",
                "email" => "admin@deloa.com",
                "password" => bcrypt("Colima2023"),
            ], [
                "role_id" => 2,
                "username" => "INFACE",
                "first_name" => "FRANCISCO",
                "last_name" => "LEON",
                "phone" => "3122250707",
                "email" => "admin@INFACE.com",
                "password" => bcrypt("Colima2023"),
            ]
        ];

        User::insert($users);
    }
}
