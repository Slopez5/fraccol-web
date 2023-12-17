<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\RealEstates\AuthRealEstateController;
use App\Http\Controllers\RealEstates\BranchesRealEstateController;
use App\Http\Controllers\RealEstates\DashboardRealEstateController;
use App\Http\Controllers\RealEstates\DevelopmentManagerRealEstateController;
use App\Http\Controllers\RealEstates\DevelopmentsRealEstateController;
use App\Http\Controllers\RealEstates\LeadsRealEstateController;
use App\Http\Controllers\RealEstates\LotsRealEstateController;
use App\Http\Controllers\RealEstates\RealEstateAgentsRealEstateController;
use App\Http\Controllers\RealEstates\SalesRealEstateController;
use App\Http\Controllers\RealEstates\SecretariesRealEstateController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {

});


Route::middleware(['auth.realEstate'])->group(function () {

   
});
