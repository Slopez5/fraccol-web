<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DevelopmentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EnterpriseController;
use App\Models\WhatsappChat;
use Illuminate\Support\Facades\Route;


Route::domain('{subdomain}.fraccionamientoscolima.com')->group(function () {
    Route::get('/home', [LandingPageController::class,'index']);
});
