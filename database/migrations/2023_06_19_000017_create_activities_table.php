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
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->unsignedBigInteger('lead_agent_id');
            $table->unsignedBigInteger('activity_type_id');
            $table->text('notes')->nullable();
            $table->date('scheduled_at');
            $table->date('completed_at');
            $table->timestamps();
            $table->softDeletes();

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
