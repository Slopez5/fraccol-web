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
        Schema::create('metadata', function (Blueprint $table) {
            $table->id();
            $table->string('config_type');
            $table->unsignedBigInteger('config_id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();

            $table->index(['config_type', 'config_id']);

            // Foreign key constraints
            $table->foreign('config_type')->references('type')->on('configurations');
            $table->foreign('config_id')->references('id')->on('configurations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metadata');
    }
};
