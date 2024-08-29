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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('development_id');
            $table->unsignedBigInteger('lote_type_id');
            $table->string('lote_number');
            $table->string('block_number');
            $table->string('lote_size');
            $table->unsignedBigInteger('lote_status_id')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('development_id')->references('id')->on('developments');
            $table->foreign('lote_type_id',"lote_type_foreign")->references('id')->on('lote_types');
            $table->foreign('lote_status_id')->references('id')->on('lote_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes');
    }
};
