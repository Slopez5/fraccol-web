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
        Schema::create('development_lot_type', function (Blueprint $table) {
            $table->unsignedBigInteger("development_id");
            $table->unsignedBigInteger("lot_type_id");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('development_id')->references('id')->on('developments');
            $table->foreign('lot_type_id')->references('id')->on('lot_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_lot_type');
    }
};
