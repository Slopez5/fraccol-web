<?php

namespace Database\Seeders;

use App\Models\PaymentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $paymentStatus = [
            [
                "status_name" => "Pendiente",
                "description" => "Pago pendiente"
            ],
            [
                "status_name" => "Pagado",
                "description" => "Pago realizado"
            ],
            [
                "status_name" => "Cancelado",
                "description" => "Pago cancelado"
            ]
        ];
        PaymentStatus::insert($paymentStatus);
    }
}
