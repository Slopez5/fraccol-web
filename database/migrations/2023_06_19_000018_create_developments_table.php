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
        Schema::create('developments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('real_estate_id');
            $table->unsignedBigInteger('real_estate_branch_id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('blueprint')->nullable();
            $table->string('location');
            $table->decimal('total_land_area', 8, 2);
            $table->integer('total_lots');
            $table->integer('available_lots');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('sort_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('real_estate_id')->references('id')->on('real_estate_agencies');
            $table->foreign('real_estate_branch_id')->references('id')->on('real_estate_branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developments');
    }
};

