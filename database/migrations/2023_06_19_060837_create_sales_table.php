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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('lead_agent_id');
            $table->unsignedBigInteger('sale_closer_id');
            $table->unsignedBigInteger('activity_id')->nullable();
            $table->date('sale_date');
            $table->string('status');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('lead_id')->references('id')->on('leads');
            $table->foreign('lead_agent_id')->references('id')->on('users');
            $table->foreign('sale_closer_id')->references('id')->on('users');
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
