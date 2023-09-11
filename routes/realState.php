<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\RealEstates\AuthRealEstateController;
use App\Http\Controllers\RealEstates\BranchesRealEstateController;
use App\Http\Controllers\RealEstates\DashboardRealEstateController;
use App\Http\Controllers\RealEstates\DevelopmentManagerRealEstateController;
use App\Http\Controllers\RealEstates\DevelopmentsRealEstateController;
use App\Http\Controllers\RealEstates\LeadsRealEstateController;
use App\Http\Controllers\RealEstates\RealEstateAgentsRealEstateController;
use App\Http\Controllers\RealEstates\SalesRealEstateController;
use App\Http\Controllers\RealEstates\SecretariesRealEstateController;
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
    Route::post('/development',[DevelopmentsRealEstateController::class,'store'])->name('realEstate.development.store');
    Route::get('/development/{id}/edit',[DevelopmentsRealEstateController::class,'edit'])->name('realEstate.development.edit');
    Route::put('/development/{id}',[DevelopmentsRealEstateController::class,'update'])->name('realEstate.development.update');
    Route::delete('/development/{id}', [DevelopmentsRealEstateController::class, 'destroy'])->name('realEstate.development.destroy');

    Route::get('/branches',[BranchesRealEstateController::class,'index'])->name('realEstate.branches.index');
    Route::get('/branches/create',[BranchesRealEstateController::class,'create'])->name('realEstate.branch.create');
    Route::post('/branches',[BranchesRealEstateController::class,'store'])->name('realEstate.branch.store');
    Route::get('/branches/{id}/edit',[BranchesRealEstateController::class,'edit'])->name('realEstate.branch.edit');
    Route::put('/branches/{id}',[BranchesRealEstateController::class,'update'])->name('realEstate.branch.update');
    Route::delete('/branches/{id}',[BranchesRealEstateController::class,'destroy'])->name('realEstate.branch.destroy');


    Route::get('/developmentManagers',[DevelopmentManagerRealEstateController::class,'index'])->name('realEstate.developmentManagers.index');
    Route::get('/developmentManager/create',[DevelopmentManagerRealEstateController::class,'create'])->name('realEstate.developmentManager.create');
    Route::post('/developmentManager',[DevelopmentManagerRealEstateController::class,'store'])->name('realEstate.developmentManager.store');
    Route::get('/developmentManager/{id}/edit',[DevelopmentManagerRealEstateController::class,'edit'])->name('realEstate.developmentManager.edit');
    Route::put('/developmentManager/{id}',[DevelopmentManagerRealEstateController::class,'update'])->name('realEstate.developmentManager.update');
    Route::delete('/developmentManager/{id}',[DevelopmentManagerRealEstateController::class,'destroy'])->name('realEstate.developmentManager.destroy');


    Route::get('/realEstateAgents',[RealEstateAgentsRealEstateController::class,'index'])->name('realEstate.realEstateAgents.index');
    Route::get('/realEstateAgent/create',[RealEstateAgentsRealEstateController::class,'create'])->name('realEstate.realEstateAgent.create');
    Route::post('/realEstateAgent',[RealEstateAgentsRealEstateController::class,'store'])->name('realEstate.realEstateAgent.store');
    Route::get('/realEstateAgent/{id}/edit',[RealEstateAgentsRealEstateController::class,'edit'])->name('realEstate.realEstateAgent.edit');
    Route::put('/realEstateAgent/{id}',[RealEstateAgentsRealEstateController::class,'update'])->name('realEstate.realEstateAgent.update');
    Route::delete('/realEstateAgent/{id}',[RealEstateAgentsRealEstateController::class,'destroy'])->name('realEstate.realEstateAgent.destroy');


    Route::get('/sales',[SalesRealEstateController::class,'index'])->name('realEstate.sales.index');
    Route::get('/sale/create',[SalesRealEstateController::class,'create'])->name('realEstate.sale.create');
    Route::post('/sale',[SalesRealEstateController::class,'store'])->name('realEstate.sale.store');
    Route::get('/sale/{id}/edit',[SalesRealEstateController::class,'edit'])->name('realEstate.sale.edit');
    Route::put('/sale/{id}',[SalesRealEstateController::class,'update'])->name('realEstate.sale.update');
    Route::delete('/sale/{id}',[SalesRealEstateController::class,'destroy'])->name('realEstate.sale.destroy');


    Route::get('/secretaries',[SecretariesRealEstateController::class,'index'])->name('realEstate.secretaries.index');
    Route::get('/secretary/create',[SecretariesRealEstateController::class,'create'])->name('realEstate.secretary.create');
    Route::post('/secretary',[SecretariesRealEstateController::class,'store'])->name('realEstate.secretary.store');
    Route::get('/secretary/{id}/edit',[SecretariesRealEstateController::class,'edit'])->name('realEstate.secretary.edit');
    Route::put('/secretary/{id}',[SecretariesRealEstateController::class,'update'])->name('realEstate.secretary.update');
    Route::delete('/secretary/{id}',[SecretariesRealEstateController::class,'destroy'])->name('realEstate.secretary.destroy');
   
});
