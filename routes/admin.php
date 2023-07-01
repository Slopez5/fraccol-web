<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DevelopmentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EnterpriseController;
use App\Models\WhatsappChat;
use Illuminate\Support\Facades\Route;

Route::get('/home', [DashboardController::class,'dashboard']);
Route::get('/development/{id}', [DevelopmentController::class,'details'])->name('development.details');
Route::get('/images', [DevelopmentController::class,'images'])->name('development.images');
Route::get('/chatbot/questions/create', [ChatController::class,'create'])->name('chatbot.questions.create');
Route::post('/chatbot/questions/store', [ChatController::class,'store'])->name('chatbot.questions.store');
Route::post('chatbot/chats', function () {
    WhatsappChat::truncate();
});
