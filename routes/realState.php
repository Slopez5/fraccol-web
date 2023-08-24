<?php

use App\Http\Controllers\RealStates\DashboardRealStatesController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [DashboardRealStatesController::class,'dashboard']);
