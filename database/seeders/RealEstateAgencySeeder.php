<?php

namespace Database\Seeders;

use App\Models\RealEstateAgency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealEstateAgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $realEstateAgency = new RealEstateAgency();
        $realEstateAgency->admin_id = 2;
        $realEstateAgency->name = 'Inface';
        $realEstateAgency->email = 'crm@inface.com';
        $realEstateAgency->phone = '3121234567';
        $realEstateAgency->website = 'www.inface.com';
        $realEstateAgency->save();

    }
}
