<?php

namespace Database\Seeders;

use App\Models\Development;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentLotTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $development = Development::find(1);
        $development->lotTypes()->attach([1 => ['price' => 850], 2  => ['price' => 870], 3  => ['price' => 890]]);
    }
}
