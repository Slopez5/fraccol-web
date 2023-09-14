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
            $table->unsignedBigInteger('lead_id')->nullable();//Cliente
            $table->unsignedBigInteger('lead_agent_id')->nullable();//A quien le dare la comisión
            $table->unsignedBigInteger('sale_closer_id')->nullable();//Regularmente sera el encargado de Fraccionamiento
            $table->unsignedBigInteger('activity_id')->nullable();
            $table->unsignedBigInteger('development_id')->nullable();
            $table->double('total_price');
            $table->double('down_payment');
            $table->double('remaining_balance');
            $table->date('sale_date');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('lead_id')->references('id')->on('leads');
            $table->foreign('lead_agent_id')->references('id')->on('users');
            $table->foreign('sale_closer_id')->references('id')->on('users');
            $table->foreign('activity_id')->references('id')->on('activities');
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
        Schema::dropIfExists('sales');
    }
};
