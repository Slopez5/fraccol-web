<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Invoice;
use App\Models\InvoiceStatus;
use App\Models\RealStateBranch;
use App\Models\ResourceType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(
        [
            DevelopmentTypeSeeder::class,
            ExpenseCategorySeeder::class,
            InvoiceStatusSeeder::class,
            PaymentMethodSeeder::class,
            PaymentStatusSeeder::class,
            ResourceTypeSeeder::class,
            UnitTypeSeeder::class,
            ActivityTypeSeeder::class,
            LotTypeSeeder::class,
            PaymentPlansSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CountrySeeder::class,
            StatesSeeder::class,
            CitySeeder::class,
        ]
       );
    }
}
