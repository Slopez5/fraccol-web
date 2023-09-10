<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\RealEstates\AuthRealEstateController;
use App\Http\Controllers\RealEstates\DashboardRealEstateController;
use App\Http\Controllers\RealEstates\DevelopmentsRealEstateController;
use App\Http\Controllers\RealEstates\LeadsRealEstateController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthRealEstateController::class, 'login'])->name('realEstate.login');
    Route::post('/authLogin', [AuthRealEstateController::class, 'authLogin'])->name('realEstate.store.login');

    Route::get('/register', [AuthRealEstateController::class, 'register'])->name('realEstate.register');
});
Route::post('/testImage',[LeadsRealEstateController::class,'update']);

Route::middleware(['auth.realEstate'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('realEstate.logout');


    Route::get('/home', [DashboardRealEstateController::class, 'dashboard'])->name('realEstate.dashboard');

    Route::get('/developments', [DevelopmentsRealEstateController::class, 'index'])->name('realEstate.developments.index');
    Route::get('/development/create', [DevelopmentsRealEstateController::class, 'create'])->name('realEstate.development.create');
    Route::delete('/development/{id}', [DevelopmentsRealEstateController::class, 'destroy'])->name('realEstate.development.destroy');
   
});
