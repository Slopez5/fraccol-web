<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\RealStateBranch;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(
        [
            LotTypeSeeder::class,
            PaymentPlansSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CountrySeeder::class,
            StatesSeeder::class,
            CitySeeder::class,
            
        ]
       );
    }
}
