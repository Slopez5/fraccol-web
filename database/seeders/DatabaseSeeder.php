<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            DevelopmentTypeSeeder::class,
            ExpenseCategorySeeder::class,
            InvoiceStatusSeeder::class,
            PaymentMethodSeeder::class,
            PaymentStatusSeeder::class,
            ResourceTypeSeeder::class,
            UnitTypeSeeder::class,
            ActivityTypeSeeder::class,
            LoteTypeSeeder::class,
            PaymentPlansSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CountrySeeder::class,
            StatesSeeder::class,
            CitySeeder::class,
            RealEstateAgencySeeder::class,
            RealEstateBranchSeeder::class,
            DevelopmentSeeder::class,
            LoteStatusSeeder::class,
        ]
       );
    }
}
