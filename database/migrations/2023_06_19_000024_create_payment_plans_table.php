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
        Schema::create('payment_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('development_id');
            $table->unsignedBigInteger('lot_type_id');
            $table->decimal('price_per_sqm', 8, 2);
            $table->integer('financing_months');
            $table->decimal('down_payment', 8, 2);
            $table->timestamps();

            // Composite primary key


            // Foreign key constraints
            $table->foreign('development_id')->references('id')->on('developments');
            $table->foreign('lot_type_id')->references('id')->on('lot_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_plans');
    }
};
