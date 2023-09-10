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
        Schema::create('real_estate_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('real_estate_agency_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('address_id');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('real_estate_agency_id')->references('id')->on('real_estate_agencies');
            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate_branches');
    }
};
