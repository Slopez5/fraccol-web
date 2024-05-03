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
        Schema::create('contract_lead', function (Blueprint $table) {
            $table->unsignedBigInteger('contract_id');
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('sale_id');
            $table->timestamps();



            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->foreign('lead_id')->references('id')->on('leads');
            $table->foreign('sale_id')->references('id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_lead');
    }
};
