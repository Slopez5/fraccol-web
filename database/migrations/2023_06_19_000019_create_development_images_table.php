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
        Schema::create('development_images', function (Blueprint $table) {
            $table->id();
            $table->string('file_url');
            $table->integer('width');
            $table->integer('height');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('development_id');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('development_id')->references('id')->on('developments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('development_images');
    }
};
