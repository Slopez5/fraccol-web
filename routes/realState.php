<?php

use App\Http\Controllers\RealStates\AuthRealStateController;
use App\Http\Controllers\RealStates\DashboardRealStatesController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthRealStateController::class, 'login'])->name('realState.login');
Route::post('/authLogin', [AuthRealStateController::class, 'authLogin'])->name('realState.store.login');

Route::get('/register', [AuthRealStateController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardRealStatesController::class, 'realState.dashboard']);
});
