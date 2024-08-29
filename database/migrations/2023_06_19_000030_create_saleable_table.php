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
        Schema::create('saleable', function (Blueprint $table) {
            $table->unsignedBigInteger('sale_id');
            $table->morphs('saleable');
            $table->unsignedBigInteger('payment_plan_id')->nullable();
            $table->decimal('sale_amount', 8, 2);
            $table->decimal('monthly_payment', 8, 2);
            $table->decimal('down_payment', 8, 2);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saleable');
    }
};
