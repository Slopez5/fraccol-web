<?php

namespace Database\Seeders;

use App\Models\Lot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Lot::insert([
            [
                "development_id"=>1,
                "lot_type_id"=>1,
                "lot_number"=>"",
                "lot_size"=>385,
                "price"=>800,
                "status"=>"",
                "location"=>"",
                "description"=>"",
                "image_url"=>""
            ]
        ]);
    }
}
