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
        Schema::create('real_state_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('real_state_agency_id');
            $table->string('name');
            $table->string('address');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('real_state_agency_id')->references('id')->on('real_state_agencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_state_branches');
    }
};
