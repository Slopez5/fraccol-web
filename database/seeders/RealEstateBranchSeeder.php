<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\RealEstateBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealEstateBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $realEstateBranch = new RealEstateBranch();
        $realEstateBranch->real_estate_agency_id = 1;
        $realEstateBranch->name = 'Oficina Las Palmas';
        $realEstateBranch->email = 'info@inface.com';
        $realEstateBranch->phone = '3121234567';
        $address = new Address();
        $address->street = 'Ayuntamiento #605';
        $address->neighborhood = 'FRACC LOMAS DE TABACHINES';
        $address->country_id = 1;
        $address->state_id = 1;
        $address->city_id = 1;
        $address->zip_code = '28979';
        $address->save();
        $realEstateBranch->address()->associate($address);
        $realEstateBranch->save();
    }
}
