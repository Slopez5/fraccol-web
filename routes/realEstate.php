<?php

use App\Http\Controllers\RealEstate\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEstate\DashboardController;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class,'showLogin'])->name('realEstate.login');
    Route::post('/login', [LoginController::class,'login'])->name('realEstate.login');
});

Route::middleware(['auth.realEstate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('realEstate.dashboard');
    Route::get('/users', [DashboardController::class,'users'])->name('realEstate.users');
    Route::get('/Appointments', [DashboardController::class,'appointments'])->name('realEstate.appointments');
    Route::get('/Permissions', [DashboardController::class,'permissions'])->name('realEstate.permissions');
    Route::get('/Developments', [DashboardController::class,'developments'])->name('realEstate.developments');
    Route::get('/Properties', [DashboardController::class,'properties'])->name('realEstate.properties');
    Route::get('/Leads', [DashboardController::class,'leads'])->name('realEstate.leads');
    Route::get('/Payments', [DashboardController::class,'payments'])->name('realEstate.payments');
    Route::get('/Invoices', [DashboardController::class,'invoices'])->name('realEstate.invoices');
    Route::get('/Reports', [DashboardController::class,'reports'])->name('realEstate.reports');

    // Users
    Route::get('/user/create', [DashboardController::class,'createUser'])->name('realEstate.user.create');
    Route::post('/user/store', [DashboardController::class,'storeUser'])->name('realEstate.user.store');
    Route::get('/user/edit/{id}', [DashboardController::class,'editUser'])->name('realEstate.user.edit');
    Route::post('/user/update/{id}', [DashboardController::class,'updateUser'])->name('realEstate.user.update');
    Route::get('/user/delete/{id}', [DashboardController::class,'deleteUser'])->name('realEstate.user.delete');
    Route::get('/user/show/{id}', [DashboardController::class,'showUser'])->name('realEstate.user.show');

    // Appointments
    Route::get('/appointment/create', [DashboardController::class,'createAppointment'])->name('realEstate.appointment.create');
    Route::post('/appointment/store', [DashboardController::class,'storeAppointment'])->name('realEstate.appointment.store');
    Route::get('/appointment/edit/{id}', [DashboardController::class,'editAppointment'])->name('realEstate.appointment.edit');
    Route::post('/appointment/update/{id}', [DashboardController::class,'updateAppointment'])->name('realEstate.appointment.update');
    Route::get('/appointment/delete/{id}', [DashboardController::class,'deleteAppointment'])->name('realEstate.appointment.delete');
    Route::get('/appointment/show/{id}', [DashboardController::class,'showAppointment'])->name('realEstate.appointment.show');

    // Permissions
    Route::get('/permission/create', [DashboardController::class,'createPermission'])->name('realEstate.permission.create');
    Route::post('/permission/store', [DashboardController::class,'storePermission'])->name('realEstate.permission.store');
    Route::get('/permission/edit/{id}', [DashboardController::class,'editPermission'])->name('realEstate.permission.edit');
    Route::post('/permission/update/{id}', [DashboardController::class,'updatePermission'])->name('realEstate.permission.update');
    Route::get('/permission/delete/{id}', [DashboardController::class,'deletePermission'])->name('realEstate.permission.delete');
    Route::get('/permission/show/{id}', [DashboardController::class,'showPermission'])->name('realEstate.permission.show');

    // Development
    Route::get('/development/create', [DashboardController::class,'createDevelopment'])->name('realEstate.development.create');
    Route::post('/development/store', [DashboardController::class,'storeDevelopment'])->name('realEstate.development.store');
    Route::get('/development/edit/{id}', [DashboardController::class,'editDevelopment'])->name('realEstate.development.edit');
    Route::post('/development/update/{id}', [DashboardController::class,'updateDevelopment'])->name('realEstate.development.update');
    Route::get('/development/delete/{id}', [DashboardController::class,'deleteDevelopment'])->name('realEstate.development.delete');
    Route::get('/development/show/{id}', [DashboardController::class,'showDevelopment'])->name('realEstate.development.show');

    // Property
    Route::get('/property/create', [DashboardController::class,'createProperty'])->name('realEstate.property.create');
    Route::post('/property/store', [DashboardController::class,'storeProperty'])->name('realEstate.property.store');
    Route::get('/property/edit/{id}', [DashboardController::class,'editProperty'])->name('realEstate.property.edit');
    Route::post('/property/update/{id}', [DashboardController::class,'updateProperty'])->name('realEstate.property.update');
    Route::get('/property/delete/{id}', [DashboardController::class,'deleteProperty'])->name('realEstate.property.delete');
    Route::get('/property/show/{id}', [DashboardController::class,'showProperty'])->name('realEstate.property.show');

    // Lead
    Route::get('/lead/create', [DashboardController::class,'createLead'])->name('realEstate.lead.create');
    Route::post('/lead/store', [DashboardController::class,'storeLead'])->name('realEstate.lead.store');
    Route::get('/lead/edit/{id}', [DashboardController::class,'editLead'])->name('realEstate.lead.edit');
    Route::post('/lead/update/{id}', [DashboardController::class,'updateLead'])->name('realEstate.lead.update');
    Route::get('/lead/delete/{id}', [DashboardController::class,'deleteLead'])->name('realEstate.lead.delete');
    Route::get('/lead/show/{id}', [DashboardController::class,'showLead'])->name('realEstate.lead.show');

    // Payment
    Route::get('/payment/create', [DashboardController::class,'createPayment'])->name('realEstate.payment.create');
    Route::post('/payment/store', [DashboardController::class,'storePayment'])->name('realEstate.payment.store');
    Route::get('/payment/edit/{id}', [DashboardController::class,'editPayment'])->name('realEstate.payment.edit');
    Route::post('/payment/update/{id}', [DashboardController::class,'updatePayment'])->name('realEstate.payment.update');
    Route::get('/payment/delete/{id}', [DashboardController::class,'deletePayment'])->name('realEstate.payment.delete');
    Route::get('/payment/show/{id}', [DashboardController::class,'showPayment'])->name('realEstate.payment.show');

    // Invoice
    Route::get('/invoice/create', [DashboardController::class,'createInvoice'])->name('realEstate.invoice.create');
    Route::post('/invoice/store', [DashboardController::class,'storeInvoice'])->name('realEstate.invoice.store');
    Route::get('/invoice/edit/{id}', [DashboardController::class,'editInvoice'])->name('realEstate.invoice.edit');
    Route::post('/invoice/update/{id}', [DashboardController::class,'updateInvoice'])->name('realEstate.invoice.update');
    Route::get('/invoice/delete/{id}', [DashboardController::class,'deleteInvoice'])->name('realEstate.invoice.delete');
    Route::get('/invoice/show/{id}', [DashboardController::class,'showInvoice'])->name('realEstate.invoice.show');

    // Report
    Route::get('/report/create', [DashboardController::class,'createReport'])->name('realEstate.report.create');
    Route::post('/report/store', [DashboardController::class,'storeReport'])->name('realEstate.report.store');
    Route::get('/report/edit/{id}', [DashboardController::class,'editReport'])->name('realEstate.report.edit');
    Route::post('/report/update/{id}', [DashboardController::class,'updateReport'])->name('realEstate.report.update');
    Route::get('/report/delete/{id}', [DashboardController::class,'deleteReport'])->name('realEstate.report.delete');

    // Logout
    Route::get('/logout', [LoginController::class,'logout'])->name('realEstate.logout');
    
});
