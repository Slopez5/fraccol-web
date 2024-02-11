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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_status_id');
            $table->unsignedBigInteger('sale_id');
            $table->date('payment_date');
            $table->decimal('payment_amount', 8, 2);
            $table->decimal('balance', 8, 2);
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('sale_id')->references('id')->on('sales');
            $table->foreign('payment_status_id')->references('id')->on('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
