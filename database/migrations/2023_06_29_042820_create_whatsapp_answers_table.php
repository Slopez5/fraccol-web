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
        Schema::create('whatsapp_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('whatsapp_question_id');
            $table->unsignedBigInteger('whatsapp_next_question_id')->nullable();
            $table->string('answer');
            $table->string('value');
            $table->timestamps();

            $table->foreign('whatsapp_question_id')->references('id')->on('whatsapp_questions');
            $table->foreign('whatsapp_next_question_id')->references('id')->on('whatsapp_questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whatsapp_answers');
    }
};
