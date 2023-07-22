<?php

use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\SalesPerson\LandingPageController;
use App\Http\Controllers\SubdomainController;
use App\Http\Controllers\WaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::domain('{subdomain}.fraccionamientoscolima.com')->group(function () {
    Route::get('/', [SubdomainController::class,'index']);
    Route::get('/dashboard', [SubdomainController::class,'dashboard']);
});

Route::get('/webhook', [WaController::class,'webhook']);
Route::post('/webhook', [WaController::class,'recibe']);
Route::get('/privacy_policy', [EnterpriseController::class, 'privacyPolicy']);

Route::get('/{subdomain}', [SubdomainController::class,'index']);
