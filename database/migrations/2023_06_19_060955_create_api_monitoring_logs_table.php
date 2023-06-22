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
        Schema::create('api_monitoring_logs', function (Blueprint $table) {
            $table->id();
            $table->string('request_url');
            $table->string('request_method');
            $table->json('request_payload')->nullable();
            $table->integer('response_code');
            $table->json('response_payload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_monitoring_logs');
    }
};
