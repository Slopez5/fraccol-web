<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RealStateBranchController;
use App\Http\Controllers\Admin\RealStatesController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/authLogin', [AuthController::class, 'authLogin'])->name('admin.store.login');

    Route::get('/register', [AuthController::class, 'register']);
});

Route::middleware(['auth.admin'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('/home', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/real_estates', [RealStatesController::class, 'index'])->name('admin.real_estates.index');
    Route::get('/real_estate/create', [RealStatesController::class, 'create'])->name('admin.real_estate.create');
    Route::post('/real_estate', [RealStatesController::class, 'store'])->name('admin.real_estate.store');
    Route::get('/real_estate/{id}/edit', [RealStatesController::class, 'edit'])->name('admin.real_estate.edit');
    Route::put('/real_estate/{id}', [RealStatesController::class, 'update'])->name('admin.real_estate.update');
    Route::delete('/real_estate/{id}', [RealStatesController::class, 'destroy'])->name('admin.real_estate.destroy');

    Route::get('/real_estate/{real_estate_id}/branches', [RealStateBranchController::class, 'index'])->name('admin.branches.index');
    Route::get('/real_estate/{real_estate_id}/branches/create', [RealStateBranchController::class, 'create'])->name('admin.branch.create');
    Route::post('/real_estate/{real_estate_id}/branches', [RealStateBranchController::class, 'store'])->name('admin.branch.store');
    Route::get('/real_estate/{real_estate_id}/branches/{id}/edit', [RealStateBranchController::class, 'edit'])->name('admin.branch.edit');
    Route::put('/real_estate/{real_estate_id}/branches/{id}', [RealStateBranchController::class, 'update'])->name('admin.branch.update');
    Route::delete('/real_estate/{real_estate_id}/branches/{id}', [RealStateBranchController::class, 'destroy'])->name('admin.branch.destroy');
});
