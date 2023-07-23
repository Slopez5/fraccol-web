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
                "first_name" => "sergio omar",
                "last_name" => "lopez ceballos",
                "phone" => "3122250707",
                "email" => "slopez@gmail.com",
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],
            [
                "role_id" => 2,
                "first_name" => "INFACE",
                "last_name" => "Desarrollos",
                "phone" => "3122250707",
                "email" => "admin@inface.com",
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],
            [
                "role_id" => 5,
                "first_name" => "Sonia Norma",
                "last_name" => "Ceballos Barbosa",
                "phone" => "3122250707",
                "email" => "slopez@gmail.com",
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],
            [
                "role_id" => 5,
                "first_name" => "Ma Elena",
                "last_name" => "Ceballos Barbosa",
                "phone" => "3122250707",
                "email" => "slopez@gmail.com",
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],
            [
                "role_id" => 5,
                "first_name" => "Luis Javier",
                "last_name" => "lopez ceballos",
                "phone" => "3122250707",
                "email" => "slopez@gmail.com",
                "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
            ],

        ];
        foreach ($users as $key => $user) {
            $_user = new User($user);
            $_user->save();
            $subdomain = new Subdomain([
                "subdomain" => $this->getSubdomain($_user->first_name, $_user->last_name),
                "notes" => ""
            ]);
            $_user->subdomain()->save($subdomain);
        }
    }

    function getSubdomain($first_name, $last_name)
    {
        $firstName = explode(' ', $first_name)[0];
        $lastName = explode(' ', $last_name)[0];

        $subdomain = $firstName . "." . $lastName;
        $contador = 1;
        $subdomainAux = $subdomain;
        while (Subdomain::where('subdomain', $subdomain)->exists()) {
            $contador++;
            $subdomainAux = $subdomain . $contador;
        }
        return $subdomainAux;
    }
}
