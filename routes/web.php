<?php

use App\Http\Controllers\ConfigurationsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\LandingPage\LandingPageDevelopmentController;
use App\Http\Controllers\SubdomainController;
use App\Http\Controllers\WaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/webhook', [WaController::class, 'webhook']);
Route::post('/webhook', [WaController::class, 'recibe']);

Route::get('/', [Controller::class,'index']);

Route::get('/test',[ConfigurationsController::class,'test']);
