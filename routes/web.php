<?php

use App\Http\Controllers\Chatbot\WaController as ChatbotWaController;
use App\Http\Controllers\ConfigurationsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevelopmentController;
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

Route::get('/webhook', [ChatbotWaController::class, 'webhook']);
Route::post('/webhook', [ChatbotWaController::class, 'recibe']);

Route::get('/', [DashboardController::class,'index'])->name('home');
Route::get('/property-list', [DashboardController::class,'propertyList'])->name('propertyList');

