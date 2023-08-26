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
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],
            [
                "role_id" => 2,
                "username" => "deloa",
                "first_name" => "DE LOA",
                "last_name" => "",
                "phone" => "3122250707",
                "email" => "admin@deloa.com",
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],
        ];

        User::insert($users);

    }
}
