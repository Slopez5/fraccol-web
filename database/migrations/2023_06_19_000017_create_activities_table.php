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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->date('activity_date');
            $table->time('activity_time');
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('lead_agent_id');
            $table->unsignedBigInteger('activity_type_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('lead_id')->references('id')->on('leads');
            $table->foreign('lead_agent_id')->references('id')->on('users');
            $table->foreign('activity_type_id')->references('id')->on('activity_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
