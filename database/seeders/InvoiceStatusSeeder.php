<?php

namespace Database\Seeders;

use App\Models\InvoiceStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $invoiceStatuses = [
            [
                "name" => "Pendiente de envío",
                "description" => ""
            ],
            [
                "name" => "Enviada",
                "description" => ""
            ],
            [
                "name" => "Pendiente de revisión",
                "description" => ""
            ],
            [
                "name" => "Aprobada",
                "description" => ""
            ],
            [
                "name" => "Pagada",
                "description" => ""
            ],
            [
                "name" => "Parcialmente pagada",
                "description" => ""
            ],
            [
                "name" => "Vencida",
                "description" => ""
            ],
            [
                "name" => "Cancelada",
                "description" => ""
            ],
            [
                "name" => "En disputa",
                "description" => ""
            ],
            [
                "name" => "En proceso de cobro",
                "description" => ""
            ],
            [
                "name" => "Aceptada",
                "description" => ""
            ],
            [
                "name" => "Rechazada",
                "description" => ""
            ],
            [
                "name" => "En espera de aprobación",
                "description" => ""
            ],
            [
                "name" => "Pendiente de pago",
                "description" => ""
            ],
            [
                "name" => "En proceso de reembolso",
                "description" => ""
            ],
            [
                "name" => "Enviada al cliente",
                "description" => ""
            ],
            [
                "name" => "En proceso de validación",
                "description" => ""
            ],
            [
                "name" => "Atrasada",
                "description" => ""
            ],
            [
                "name" => "En proceso de contabilización",
                "description" => ""
            ],
            [
                "name" => "Archivada",
                "description" => ""
            ]
        ];

        InvoiceStatus::insert($invoiceStatuses);
    }
}
