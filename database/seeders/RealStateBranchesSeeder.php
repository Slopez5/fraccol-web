<?php

namespace Database\Seeders;

use App\Models\RealStateBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealStateBranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RealStateBranch::insert([
            [
                "real_state_agency_id" => 1,
                "name" => "Sucursal 1",
                "email" => "sucursal1@deloa.com",
                "phone" => "312",
                "address_id" => 1
            ]
        ]);
    }
}
