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
                "development_id"=>1,
                "lot_type_id"=>1,
                "price_per_sqm"=>800,
                "financing_months"=>12,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],
            [
                "development_id"=>1,
                "lot_type_id"=>1,
                "price_per_sqm"=>800,
                "financing_months"=>24,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],
            [
                "development_id"=>1,
                "lot_type_id"=>1,
                "price_per_sqm"=>800,
                "financing_months"=>36,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],
            [
                "development_id"=>1,
                "lot_type_id"=>1,
                "price_per_sqm"=>800,
                "financing_months"=>48,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],
            [
                "development_id"=>1,
                "lot_type_id"=>1,
                "price_per_sqm"=>800,
                "financing_months"=>60,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],
            [
                "development_id"=>1,
                "lot_type_id"=>2,
                "price_per_sqm"=>800,
                "financing_months"=>12,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],[
                "development_id"=>1,
                "lot_type_id"=>2,
                "price_per_sqm"=>800,
                "financing_months"=>24,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],[
                "development_id"=>1,
                "lot_type_id"=>2,
                "price_per_sqm"=>800,
                "financing_months"=>36,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],[
                "development_id"=>1,
                "lot_type_id"=>2,
                "price_per_sqm"=>800,
                "financing_months"=>48,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ],[
                "development_id"=>1,
                "lot_type_id"=>2,
                "price_per_sqm"=>800,
                "financing_months"=>60,
                "down_payment"=>5000,
                "name"=>"",
                "description"=>""
            ]
        ]);
    }
}
