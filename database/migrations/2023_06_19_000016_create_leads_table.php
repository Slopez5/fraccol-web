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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthDay');
            $table->string('birthPlace');
            $table->string('maritalStatus');
            $table->string('occupation');
            $table->string('unofficialManager');
            $table->string('beneficiary');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('address_id');
            $table->string('source');
            $table->string('status');
            $table->string('ine_file')->nullable();
            $table->unsignedBigInteger('lead_agent_id');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('lead_agent_id')->references('id')->on('users');
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
        Schema::dropIfExists('leads');
    }
};
