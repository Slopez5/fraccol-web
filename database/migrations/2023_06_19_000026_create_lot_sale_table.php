<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_sale', function (Blueprint $table) {
            $table->unsignedBigInteger('lot_id');
            $table->unsignedBigInteger('sale_id');
            $table->unsignedBigInteger('payment_plan_id');
            $table->decimal('sale_amount', 8, 2);
            $table->decimal('monthly_payment', 8, 2);
            $table->decimal('down_payment', 8, 2);
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('lot_id')->references('id')->on('lots');
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('payment_plan_id')->references('id')->on('payment_plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lot_sale');
    }
};
