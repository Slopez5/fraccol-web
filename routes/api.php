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

/**
 * Auth Apis
 */
Route::post('/v1/login', [AuthApiController::class, 'login']);
Route::post('/v1/register',[AuthApiController::class,'register']);
Route::post('/v1/create_user', [AuthApiController::class, 'createUser']);
Route::post('/v1/forget_password',[AuthApiController::class,'forgetPassword']);

/**
 * Settings System Apis
 */
Route::post('/v1/role', [RolesApiController::class, 'addRole']);
Route::get('/v1/countries', [CountryApiController::class, 'getCountries']);
Route::post('/v1/create_country', [CountryApiController::class, 'createCountry']);
Route::get('/v1/country/{id}', [CountryApiController::class, 'countryDetails']);
Route::post('/v1/country/{id}/update', [CountryApiController::class, 'updateCountry']);
Route::delete('/v1/country/{id}/delete', [CountryApiController::class, 'deleteCountry']);

Route::get('/v1/country/{id}/states', [CountryApiController::class, 'getStates']);
Route::post('/v1/country/{id}/create_state', [CountryApiController::class, 'createState']);
Route::get('/v1/state/{id}', [CountryApiController::class, 'stateDetails']);
Route::post('/v1/state/{id}/update', [CountryApiController::class, 'updateState']);
Route::delete('/v1/state/{id}/delete', [CountryApiController::class, 'deleteState']);

Route::get('/v1/state/{id}/cities', [CountryApiController::class, 'getCities']);
Route::post('/v1/state/{id}/create_city', [CountryApiController::class, 'createCity']);
Route::get('/v1/city/{id}', [CountryApiController::class, 'cityDetails']);
Route::post('/v1/city/{id}/update', [CountryApiController::class, 'updateCity']);
Route::delete('/v1/city/{id}/delete', [CountryApiController::class, 'deleteCity']);

/**
 * Real Estates Agencies Apis
 */
Route::get('/v1/real_estates', [RealEstateApiController::class, 'getRealEstates']);
Route::post('/v1/create_real_estate', [RealEstateApiController::class, 'addRealEstate']);
Route::get('/v1/real_estate/{id}', [RealEstateApiController::class, 'realEstateDetails']);
Route::post('/v1/real_estate/{id}/update', [RealEstateApiController::class, 'updateRealEstate']);
Route::delete('/v1/real_estate/{id}/delete', [RealEstateApiController::class, 'deleteRealEstate']);

/**
 * Real Estates Branches Apis
 */
Route::get('/v1/real_estate/{id}/real_estate_branches', [RealEstateApiController::class, 'getRealEstateBranches']);
Route::post('/v1/real_estate/{id}/create_real_estate_branch', [RealEstateApiController::class, 'addRealEstateAgency']);
Route::get('/v1/real_estate_branch/{id}', [RealEstateApiController::class, 'realEstateBranchDetails']);
Route::post('/v1/real_estate_branch/{id}/update', [RealEstateApiController::class, 'updateRealEstateBranch']);
Route::delete('/v1/real_estate_branch/{id}/delete', [RealEstateApiController::class, 'deleteRealEstateBranch']);

/**
 * Lote Types Apis
 */
Route::get('/v1/lote_types', [LoteApiController::class, 'getLoteTypes']);
Route::post('/v1/create_lote_type', [LoteApiController::class, 'addLoteType']);
Route::get('/v1/lote_type/{id}', [LoteApiController::class, 'loteTypeDetails']);
Route::post('/v1/lote_type/{id}/update', [LoteApiController::class, 'updateLoteType']);
Route::delete('/v1/lote_type/{id}/delete', [LoteApiController::class, 'deleteLoteType']);

 /**
 * Payment Plans Apis
 */
Route::get('/v1/payment_plans', [PaymentPlansApiController::class, 'getPaymentPlans']);
Route::post('/v1/create_payment_plan', [PaymentPlansApiController::class, 'createPaymentPlan']);
Route::get('/v1/payment_plan/{id}', [PaymentPlansApiController::class, 'paymentPlanDetails']);
Route::post('/v1/payment_plan/{id}/update', [PaymentPlansApiController::class, 'updatePaymentPlan']);
Route::delete('/v1/payment_plan/{id}/delete', [PaymentPlansApiController::class, 'deletePaymentPlan']);


/**
 * Developments Apis
 */
Route::get('/v1/developments', [DevelopmentApiController::class, 'getAllDevelopments']);
Route::post('/v1/development', [DevelopmentApiController::class, 'createDevelopment']);
Route::get('/v1/development/{id}', [DevelopmentApiController::class, 'getDevelopmentDetails']);
Route::post('/v1/development/{id}/edit', [DevelopmentApiController::class, 'updateDevelopment']);
Route::post('/v1/development/{id}/assign_lote_type', [DevelopmentApiController::class, 'addLoteTypeToDevelopment']);
Route::post('/v1/development/{development_id}/lote_type/{lote_type_id}/assign_payment_plan', [DevelopmentApiController::class, 'addPaymentPlanToDevelopment']);
Route::get('/v1/development/{developmentId}/lotes', [DevelopmentApiController::class, 'getLotes']);
Route::post('/v1/development/{developmentId}/lote', [DevelopmentApiController::class, 'createLote']);
Route::get('/v1/lote/{id}', [DevelopmentApiController::class, 'getLoteDetails']);
Route::post('/v1/lote/{id}/metadata', [DevelopmentApiController::class, 'addLoteMetadata']);
Route::get('/v1/lote/{id}/price', [DevelopmentApiController::class, 'getPriceByLote']);
Route::post('/v1/development/{id}/appointment', [DevelopmentApiController::class, 'createAppointment']);
Route::get('/v1/development/{id}/appointments', [DevelopmentApiController::class, 'getAppointments']);
Route::get('/v1/appointment/{id}', [DevelopmentApiController::class, 'getAppointmentDetails']);
