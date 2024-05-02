<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        State::insert([
            [
                "country_id" => 1,
                "name" => "Colima",
                "abbreviation" => "Col"
            ]
        ]);
    }
}
