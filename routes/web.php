<?php

use App\Http\Controllers\Chatbot\WaController as ChatbotWaController;
use App\Http\Controllers\ConfigurationsController;
use App\Http\Controllers\Controller;
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

Route::get('/test', [ConfigurationsController::class,'test'])->name('test');

Route::get('/developments',[DevelopmentController::class,'index'])->name('developments');
Route::get('/development/{id}',[DevelopmentController::class,'show'])->name('show.development');
Route::get('/development/{id}/configurations',[DevelopmentController::class,'developmentConfiguration'])->name('configuration.development');
