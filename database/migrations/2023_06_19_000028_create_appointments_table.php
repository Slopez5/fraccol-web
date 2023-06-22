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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email');
            $table->date('appointment_date');
            $table->string('status');
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('sale_closer_agent_id');
            $table->unsignedBigInteger('lead_agent_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('sale_closer_agent_id')->references('id')->on('users');
            $table->foreign('lead_agent_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
