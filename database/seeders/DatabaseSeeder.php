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
            RealStateAgencySeeder::class,
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
