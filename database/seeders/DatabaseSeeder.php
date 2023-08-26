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
            RoleSeeder::class,
            UserSeeder::class,
            RealStateAgencySeeder::class,
            StatesSeeder::class,
            CitySeeder::class,
            AddressSeeder::class,
            RealStateBranchesSeeder::class,
            DevelopmentSeeder::class,
            DevelopmentImagesSedder::class,
            LotTypeSeeder::class,
            DevelopmentLotTypeSeeder::class,
            LotSeeder::class,
            LotImagesSeeder::class,
            PaymentPlansSeeder::class,
            WhatsappQuestionSeeder::class,
            WhatsappAnswerSeeder::class
        ]
       );
    }
}
