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
        Schema::create('development_lote_type', function (Blueprint $table) {
            $table->unsignedBigInteger("development_id");
            $table->unsignedBigInteger("lote_type_id");
            $table->decimal('price',8,2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('development_id')->references('id')->on('developments');
            $table->foreign('lote_type_id',"lote_type_dev_foreign")->references('id')->on('lote_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_lote_type');
    }
};
