<?php

namespace Database\Seeders;

use App\Models\RealStateAgency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealStateAgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RealStateAgency::insert([
            [
                'name' => 'DE LOA',
                'email' => 'email@DELOA.com',
                'phone' => '3120000000',
            ],
            [
                'name' => 'INFACE',
                'email' => 'email@INFACE.com',
                'phone' => '3120000001',
            ],
            [
                'name' => 'Nava Asesores',
                'email' => 'email@NavaAsesores.com',
                'phone' => '3120000002',
            ]
        ]);
    }
}
