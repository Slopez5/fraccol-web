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
                "name" => "Financiamiento a 1 año",
                "description" => ""
            ],
            [
                "financing_months" => 24,
                "name" => "Financiamiento a 2 años",
                "description" => ""
            ],
            [
                "financing_months" => 36,
                "name" => "Financiamiento a 3 años",
                "description" => ""
            ],
            [
                "financing_months" => 48,
                "name" => "Financiamiento a 4 años",
                "description" => ""
            ],
            [
                "financing_months" => 60,
                "name" => "Financiamiento a 5 años",
                "description" => ""
            ]
        ]);
    }
}
