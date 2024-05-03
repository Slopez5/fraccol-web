<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $paymentMethod = [
            [
                "name" => "Efectivo",
                "description" => "Pago en efectivo"
            ],
            [
                "name" => "Transferencia",
                "description" => "Pago por transferencia"
            ],
            [
                "name" => "Cheque",
                "description" => "Pago con cheque"
            ],
            [
                "name" => "Tarjeta de crédito",
                "description" => "Pago con tarjeta de crédito"
            ]
        ];
        PaymentMethod::insert($paymentMethod);
    }
}
