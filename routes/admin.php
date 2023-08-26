<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RealStateBranchController;
use App\Http\Controllers\Admin\RealStatesController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/authLogin', [AuthController::class, 'authLogin'])->name('admin.store.login');

Route::get('/register', [AuthController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/real_states', [RealStatesController::class, 'index'])->name('admin.real_states.index');
    Route::get('/real_state/create', [RealStatesController::class, 'create'])->name('admin.real_state.create');
    Route::post('/real_state', [RealStatesController::class, 'store'])->name('admin.real_state.store');
    Route::get('/real_state/{id}/edit', [RealStatesController::class, 'edit'])->name('admin.real_state.edit');
    Route::put('/real_state/{id}', [RealStatesController::class, 'update'])->name('admin.real_state.update');
    Route::delete('/real_state/{id}', [RealStatesController::class, 'destroy'])->name('admin.real_state.destroy');

    Route::get('/real_states/{real_state_id}/branches', [RealStateBranchController::class, 'index'])->name('admin.branches.index');
    Route::get('/real_states/{real_state_id}/branches/create', [RealStateBranchController::class, 'create'])->name('admin.branch.create');
    Route::post('/real_states/{real_state_id}/branches', [RealStateBranchController::class, 'store'])->name('admin.branch.store');
    Route::get('/real_states/{real_state_id}/branches/{id}/edit', [RealStateBranchController::class, 'edit'])->name('admin.branch.edit');
    Route::put('/real_states/{real_state_id}/branches/{id}', [RealStateBranchController::class, 'update'])->name('admin.branch.update');
    Route::delete('/real_states/{real_state_id}/branches/{id}', [RealStateBranchController::class, 'destroy'])->name('admin.branch.destroy');
});
