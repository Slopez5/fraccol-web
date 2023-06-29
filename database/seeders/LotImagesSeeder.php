<?php

namespace Database\Seeders;

use App\Models\LotImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LotImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LotImage::insert([
            "lot_id"=>1,
            "image_url"=>"",
            "title"=>"",
            "description"=>""
        ]);
    }
}
