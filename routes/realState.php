<?php

use App\Http\Controllers\RealStates\AuthRealStateController;
use App\Http\Controllers\RealStates\DashboardRealStatesController;
use App\Http\Controllers\RealStates\LeadsRealStateController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthRealStateController::class, 'login'])->name('realState.login');
    Route::post('/authLogin', [AuthRealStateController::class, 'authLogin'])->name('realState.store.login');

    Route::get('/register', [AuthRealStateController::class, 'register'])->name('realState.register');
});
Route::post('/testImage',[LeadsRealStateController::class,'update']);

Route::middleware(['auth.realState'])->group(function () {
    Route::get('/home', [DashboardRealStatesController::class, 'dashboard'])->name('realState.dashboard');
   
});
