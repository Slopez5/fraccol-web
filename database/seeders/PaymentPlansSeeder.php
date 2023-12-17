<?php

namespace Database\Seeders;

use App\Models\PaymentPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PaymentPlan::insert([
            [
                "financing_months" => 12,
                "name" => "",
                "description" => ""
            ],
            [
                "financing_months" => 24,
                "name" => "",
                "description" => ""
            ],
            [
                "financing_months" => 36,
                "name" => "",
                "description" => ""
            ],
            [
                "financing_months" => 48,
                "name" => "",
                "description" => ""
            ],
            [
                "financing_months" => 60,
                "name" => "",
                "description" => ""
            ]
        ]);
    }
}
