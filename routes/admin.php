<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\EnterpriseController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [DashboardController::class,'dashboard']);
