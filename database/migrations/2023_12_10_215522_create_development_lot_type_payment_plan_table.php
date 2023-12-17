<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('development_lot_type_payment_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('development_id');
            $table->unsignedBigInteger('lot_type_id');
            $table->unsignedBigInteger('payment_plan_id');
            $table->decimal('price_per_sqm', 8, 2);
            $table->decimal('down_payment', 8, 2);
            $table->timestamps();

            $table->foreign('development_id')->references('id')->on('developments');
            $table->foreign('lot_type_id')->references('id')->on('lot_types');
            $table->foreign('payment_plan_id')->references('id')->on('payment_plans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_lot_type_payment_plan');
    }
};
