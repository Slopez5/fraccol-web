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
        $user = new User([
            "role_id" => 1,
            "first_name" => "sergio omar",
            "last_name" => "lopez ceballos",
            "phone" => "3122250707",
            "email" => "slopez@gmail.com",
            "password" => "$2a$12$9gz/msT4sP5APbflLOL/NuG.ymOm0YPHpr9WdUqmn.tZ2STbtH3xm",
        ]);
        $user->save();
        $subdomain = new Subdomain([
            "subdomain" => $this->getSubdomain($user->first_name, $user->last_name),
            "notes" => ""
        ]);
        $user->subdomain()->save($subdomain);
    }

    function getSubdomain($first_name, $last_name)
    {
        $firstName = explode(' ',$first_name)[0];
        $lastName = explode(' ',$last_name)[0];

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
