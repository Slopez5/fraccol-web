<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $expenseCategories = [
            [
                "name" => "Alquiler o hipoteca",
                "description" => ""
            ],
            [
                "name" => "Servicios públicos",
                "description" => ""
            ],
            [
                "name" => "Gastos de mantenimiento",
                "description" => ""
            ],
            [
                "name" => "Gastos de comida",
                "description" => ""
            ],
            [
                "name" => "Transporte",
                "description" => ""
            ],
            [
                "name" => "Entretenimiento",
                "description" => ""
            ],
            [
                "name" => "Viajes",
                "description" => ""
            ],
            [
                "name" => "Salud",
                "description" => ""
            ],
            [
                "name" => "Educación",
                "description" => ""
            ],
            [
                "name" => "Seguros",
                "description" => ""
            ],
            [
                "name" => "Impuestos",
                "description" => ""
            ],
            [
                "name" => "Tecnología y comunicaciones",
                "description" => ""
            ],
            [
                "name" => "Ropa y accesorios",
                "description" => ""
            ],
            [
                "name" => "Gastos bancarios",
                "description" => ""
            ],
            [
                "name" => "Donaciones y obras benéficas",
                "description" => ""
            ],
            [
                "name" => "Gastos de negocios",
                "description" => ""
            ],
            [
                "name" => "Ahorros e inversiones",
                "description" => ""
            ],
            [
                "name" => "Cuidado personal",
                "description" => ""
            ],
            [
                "name" => "Mascotas",
                "description" => ""
            ],
            [
                "name" => "Otros",
                "description" => ""
            ]
        ];

        ExpenseCategory::insert($expenseCategories);
    }
}
