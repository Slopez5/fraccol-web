<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RealStateBranchController;
use App\Http\Controllers\Admin\RealStatesController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {

});

Route::middleware(['auth.admin'])->group(function () {

});
