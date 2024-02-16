<?php

use App\Http\Controllers\API\V1\AuthApiController;
use App\Http\Controllers\API\V1\CountryApiController;
use App\Http\Controllers\API\V1\DevelopmentApiController;
use App\Http\Controllers\API\V1\LoteApiController;
use App\Http\Controllers\API\V1\PaymentPlansApiController;
use App\Http\Controllers\API\V1\RealEstateApiController;
use App\Http\Controllers\API\V1\RolesApiController;
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

Route::post('/v1/login',[AuthApiController::class,'createUser']);

Route::post('/v1/create_country',[CountryApiController::class,'createCountry']);
Route::post('/v1/country/{id}/create_state',[CountryApiController::class,'createState']);
Route::post('/v1/state/{id}/create_city',[CountryApiController::class,'createCity']);
Route::post('/v1/create_lote_type',[LoteApiController::class,'addLoteType']);
Route::post('/v1/create_payment_plan',[PaymentPlansApiController::class,'createPaymentPlan']);

Route::post('/v1/role', [RolesApiController::class, 'addRole']);
Route::post('/v1/create_user', [AuthApiController::class, 'createUser']);
Route::post('/v1/create_real_estate', [RealEstateApiController::class, 'addRealEstate']);
Route::post('/v1/real_estate/{id}/create_real_estate_branch',[RealEstateApiController::class,'addRealEstateAgency']);



Route::post('/v1/development', [DevelopmentApiController::class, 'createDevelopment']);
Route::post('/v1/development/{id}/assign_lote_type',[DevelopmentApiController::class,'addLoteTypeToDevelopment']);
Route::post('/v1/development/{development_id}/lote_type/{lote_type_id}/assign_payment_plan',[DevelopmentApiController::class,'addPaymentPlanToDevelopment']);
Route::get('/v1/developments', [DevelopmentApiController::class, 'getAllDevelopments']);
Route::get('/v1/development/{id}', [DevelopmentApiController::class, 'getDevelopmentDetails']);

Route::post('/v1/development/{id}/appointment', [DevelopmentApiController::class, 'createAppointment']);
Route::get('/v1/development/{id}/appointments', [DevelopmentApiController::class, 'getAppointments']);
Route::get('/v1/appointment/{id}', [DevelopmentApiController::class, 'getAppointmentDetails']);

Route::post('/v1/development/{developmentId}/lote', [DevelopmentApiController::class, 'createLote']);
Route::get('/v1/development/{developmentId}/lotes', [DevelopmentApiController::class, 'getLotes']);
Route::get('/v1/lote/{id}', [DevelopmentApiController::class, 'getLoteDetails']);
Route::post('/v1/lote/{id}/metadata',[DevelopmentApiController::class,'addLoteMetadata']);
Route::get('/v1/lote/{id}/price', [DevelopmentApiController::class, 'getPriceByLote']);
