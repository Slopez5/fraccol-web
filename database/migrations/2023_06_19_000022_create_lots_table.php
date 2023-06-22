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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('development_id');
            $table->unsignedBigInteger('lot_type_id');
            $table->string('lot_number');
            $table->string('lot_size');
            $table->decimal('price', 8, 2);
            $table->string('status');
            $table->string('location');
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('lots');
    }
};
