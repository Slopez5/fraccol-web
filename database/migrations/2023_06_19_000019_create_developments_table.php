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
            $table->unsignedBigInteger('real_estate_id')->nullable();
            $table->unsignedBigInteger('real_estate_branch_id')->nullable();
            $table->unsignedBigInteger('development_type_id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('blueprint')->nullable();
            $table->string('location');
            $table->decimal('total_land_area', 8, 2)->nullable();
            $table->integer('total_lotes')->nullable();
            $table->integer('available_lotes')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('sort_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('development_type_id')->references('id')->on('development_types');
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

