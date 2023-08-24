<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DevelopmentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EnterpriseController;
use App\Models\WhatsappChat;
use Illuminate\Support\Facades\Route;


Route::get('/home', [DashboardController::class,'dashboard']);
