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
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_agent_id');
            $table->unsignedBigInteger('appointment_id');
            $table->decimal('commission', 8, 2);
            $table->boolean('paid')->default(false);
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('lead_agent_id')->references('id')->on('users');
            $table->foreign('appointment_id')->references('id')->on('appointments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
};
