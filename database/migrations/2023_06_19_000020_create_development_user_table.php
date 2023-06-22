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
        Schema::create('development_user', function (Blueprint $table) {
            $table->unsignedBigInteger('development_id');
            $table->unsignedBigInteger('lead_agent_id');

            // Composite primary key
            $table->primary(['development_id', 'lead_agent_id']);

            // Foreign key constraints
            $table->foreign('development_id')->references('id')->on('developments');
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
        Schema::dropIfExists('development_user');
    }
};
