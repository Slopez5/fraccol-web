<?php

namespace Database\Seeders;

use App\Models\Development;
use App\Models\Lote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $developments = [
            //Palmares
            [
                "real_estate_id" => 1,
                "real_estate_branch_id" => 1,
                "development_type_id" => 1,
                "name" => "Palmares",
                "location" => "Colima, Colima",
                "total_land_area" => 1000,
                "total_lotes" => 100,
                "available_lotes" => 100,
                "start_date" => "2023-06-19",
                "end_date" => "2023-06-19",
                "sort_description" => "",
                "full_description" => "",
                "status" => "Activo"
            ],
            //Agua Dulce
            [
                "real_estate_id" => 1,
                "real_estate_branch_id" => 1,
                "development_type_id" => 1,
                "name" => "Agua Dulce",
                "location" => "Cuauhtemoc, Colima",
                "total_land_area" => 1000,
                "total_lot3s" => 100,
                "available_lotes" => 100,
                "start_date" => "2023-06-19",
                "end_date" => "2023-06-19",
                "sort_description" => "",
                "full_description" => "",
                "status" => "Activo"
            ],
            // Rincon Campestre
            [
                "real_estate_id" => 1,
                "real_estate_branch_id" => 1,
                "development_type_id" => 1,
                "name" => "Rincon Campestre",
                "location" => "Cuauhtemoc, Colima",
                "total_land_area" => 1000,
                "total_lotes" => 100,
                "available_lotes" => 100,
                "start_date" => "2023-06-19",
                "end_date" => "2023-06-19",
                "sort_description" => "",
                "full_description" => "",
                "status" => "Activo"
            ],
        ];
        Development::insert($developments);
        $this->addLoteTypeToDevelopment();
        $this->addPaymentPlanToDevelopment();
    }

    // add lotes to development
    public function addLotesToDevelopment()
    {
        $development = Development::find(1);
        $lotes = [
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "lote_number" => 1,
                "block_number" => 1,
                "lote_size" => 100,
                "lote_status_id" => 1,
                "location" => "19.2492, -103.7271",
                "description" => "",
                "image_url" => "",
            ]
        ];
    }

    //add lote type to development
    public function addLoteTypeToDevelopment()
    {
        //1 = Palmares
        $development = Development::find(1);
        $loteTypes = [
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "price" => 600,
            ]
        ];
        $development->loteTypes()->attach($loteTypes);
        //2 = Agua Dulce
        $development = Development::find(2);
        $loteTypes = [
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "price" => 390,
            ]
        ];
        $development->loteTypes()->attach($loteTypes);
        //3 = Rincon Campestre
    }

    //add payment plan to development
    public function addPaymentPlanToDevelopment()
    {
        $development = Development::find(1);
        $paymentPlans = [
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "payment_plan_id" => 1,
                "price_per_sqm" => 650,
                "down_payment" => 5000,
            ],
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "payment_plan_id" => 2,
                "price_per_sqm" => 700,
                "down_payment" => 5000,
            ],
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "payment_plan_id" => 3,
                "price_per_sqm" => 750,
                "down_payment" => 5000,
            ],
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "payment_plan_id" => 4,
                "price_per_sqm" => 800,
                "down_payment" => 5000,
            ],
            [
                "development_id" => $development->id,
                "lote_type_id" => 1,
                "payment_plan_id" => 5,
                "price_per_sqm" => 875,
                "down_payment" => 5000,
            ],
        ];
        $development->loteTypes->firstWhere('id', 1)->paymentPlans()->attach($paymentPlans);
        
    }
}
