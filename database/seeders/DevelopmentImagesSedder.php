<?php

namespace Database\Seeders;

use App\Models\DevelopmentImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentImagesSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DevelopmentImage::insert([
            [
                "file_url"=>"",
                "width"=>0,
                "height"=>0,
                "description"=>"",
                "development_id"=>1
            ]
        ]);
    }
}
