<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('whatsapp_chat', function (Blueprint $table) {
            $table->id();
            $table->string('phoneID');
            $table->unsignedBigInteger('whatsapp_question_id')->nullable();
            $table->string('whatsapp_bussiness_id');
            $table->string('phone');
            $table->string('profile_name');
            $table->string('value');
            $table->boolean('is_answer')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whatsapp_chat');
    }
};