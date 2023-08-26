<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Address::insert([
            "street"=>"Degollado #115",
            "city_id"=>2,
            "state_id"=>1,
            "zip_code"=>"28500"
        ]);
    }
}
