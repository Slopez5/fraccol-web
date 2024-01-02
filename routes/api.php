<?php

use App\Http\Controllers\API\V1\DevelopmentApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/v1/development',[DevelopmentApiController::class,'createDevelopment']);
Route::get('/v1/developments',[DevelopmentApiController::class,'getAllDevelopments']);
Route::get('/v1/development/{id}',[DevelopmentApiController::class,'getDevelopmentDetails']);

Route::post('/v1/development/{id}/appointment',[DevelopmentApiController::class,'createAppointment']);
Route::get('/v1/development/{id}/appointments',[DevelopmentApiController::class,'getAppointments']);
Route::get('/v1/appointment/{id}',[DevelopmentApiController::class,'getAppointmentDetails']);

Route::post('/v1/development/{developmentId}/lote',[DevelopmentApiController::class,'createLote']);
Route::get('/v1/development/{developmentId}/lotes',[DevelopmentApiController::class,'getLotes']);
Route::get('/v1/lote/{id}',[DevelopmentApiController::class,'getLoteDetails']);
Route::get('/v1/lote/{id}/price',[DevelopmentApiController::class,'getPriceByLote']);

