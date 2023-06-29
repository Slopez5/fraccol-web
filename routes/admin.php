<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DevelopmentController;
use App\Http\Controllers\EnterpriseController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [DashboardController::class,'dashboard']);
Route::get('/development/{id}', [DevelopmentController::class,'details'])->name('development.details');
Route::get('/images', [DevelopmentController::class,'images'])->name('development.images');
