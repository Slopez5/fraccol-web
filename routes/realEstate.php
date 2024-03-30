<?php

use App\Http\Controllers\RealEstate\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEstate\DashboardController;
use App\Http\Controllers\RealEstate\UserController;
use App\Http\Controllers\RealEstate\AppointmentController;
use App\Http\Controllers\RealEstate\PermissionController;
use App\Http\Controllers\RealEstate\DevelopmentController;
use App\Http\Controllers\RealEstate\PropertyController;
use App\Http\Controllers\RealEstate\LeadController;
use App\Http\Controllers\RealEstate\PaymentController;
use App\Http\Controllers\RealEstate\InvoiceController;
use App\Http\Controllers\RealEstate\ReportController;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('realEstate.login');
    Route::post('/login', [LoginController::class, 'login'])->name('realEstate.login');

    Route::get('/register', [LoginController::class, 'showRegister'])->name('realEstate.register');
    Route::post('/register', [LoginController::class, 'register'])->name('realEstate.register');
});

Route::middleware(['auth.realEstate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('realEstate.dashboard');
    Route::get('/users', [DashboardController::class, 'users'])->name('realEstate.users');
    Route::get('/Appointments', [DashboardController::class, 'appointments'])->name('realEstate.appointments');
    Route::get('/Permissions', [DashboardController::class, 'permissions'])->name('realEstate.permissions');
    Route::get('/Developments', [DashboardController::class, 'developments'])->name('realEstate.developments');
    Route::get('/Properties', [DashboardController::class, 'properties'])->name('realEstate.properties');
    Route::get('/Leads', [DashboardController::class, 'leads'])->name('realEstate.leads');
    Route::get('/Payments', [DashboardController::class, 'payments'])->name('realEstate.payments');
    Route::get('/Invoices', [DashboardController::class, 'invoices'])->name('realEstate.invoices');
    Route::get('/Reports', [DashboardController::class, 'reports'])->name('realEstate.reports');

    // Users
    Route::get('/user/create', [UserController::class, 'createUser'])->name('realEstate.user.create');
    Route::post('/user/store', [UserController::class, 'storeUser'])->name('realEstate.user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'editUser'])->name('realEstate.user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'updateUser'])->name('realEstate.user.update');
    Route::delete('/user/delete/{id}', [UserController::class, 'deleteUser'])->name('realEstate.user.delete');
    Route::get('/user/show/{id}', [UserController::class, 'showUser'])->name('realEstate.user.show');

    // Appointments
    Route::get('/appointment/create', [AppointmentController::class, 'createAppointment'])->name('realEstate.appointment.create');
    Route::post('/appointment/store', [AppointmentController::class, 'storeAppointment'])->name('realEstate.appointment.store');
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'editAppointment'])->name('realEstate.appointment.edit');
    Route::put('/appointment/update/{id}', [AppointmentController::class, 'updateAppointment'])->name('realEstate.appointment.update');
    Route::delete('/appointment/delete/{id}', [AppointmentController::class, 'deleteAppointment'])->name('realEstate.appointment.delete');
    Route::get('/appointment/show/{id}', [AppointmentController::class, 'showAppointment'])->name('realEstate.appointment.show');

    // Permissions
    Route::get('/permission/create', [PermissionController::class, 'createPermission'])->name('realEstate.permission.create');
    Route::post('/permission/store', [PermissionController::class, 'storePermission'])->name('realEstate.permission.store');
    Route::get('/permission/edit/{id}', [PermissionController::class, 'editPermission'])->name('realEstate.permission.edit');
    Route::put('/permission/update/{id}', [PermissionController::class, 'updatePermission'])->name('realEstate.permission.update');
    Route::delete('/permission/delete/{id}', [PermissionController::class, 'deletePermission'])->name('realEstate.permission.delete');
    Route::get('/permission/show/{id}', [PermissionController::class, 'showPermission'])->name('realEstate.permission.show');

    // Development
    Route::get('/development/create', [DevelopmentController::class, 'createDevelopment'])->name('realEstate.development.create');
    Route::post('/development/store', [DevelopmentController::class, 'storeDevelopment'])->name('realEstate.development.store');
    Route::get('/development/edit/{id}', [DevelopmentController::class, 'editDevelopment'])->name('realEstate.development.edit');
    Route::put('/development/update/{id}', [DevelopmentController::class, 'updateDevelopment'])->name('realEstate.development.update');
    Route::delete('/development/delete/{id}', [DevelopmentController::class, 'deleteDevelopment'])->name('realEstate.development.delete');
    Route::get('/development/show/{id}', [DevelopmentController::class, 'showDevelopment'])->name('realEstate.development.show');
    Route::get('/development/{development}/lot', [DevelopmentController::class, 'developmentLots'])->name('realEstate.development.lot');
    Route::get('/development/{development}/metadata', [DevelopmentController::class, 'developmentMetadata'])->name('realEstate.development.metadata');
    Route::get('/development/{development}/lotType', [DevelopmentController::class, 'developmentLoteTypes'])->name('realEstate.development.lotType');
    Route::get('/development/{development}/lotType/{lotType}/paymentPlan', [DevelopmentController::class, 'developmentLoteTypePaymentPlans'])->name('realEstate.development.lotType.paymentPlan');

    // Development -> Lotes
    Route::get('/development/{development}/lot/create', [DevelopmentController::class, 'createDevelopmentLot'])->name('realEstate.development.lot.create');
    Route::post('/development/{development}/lot/store', [DevelopmentController::class, 'storeDevelopmentLot'])->name('realEstate.development.lot.store');
    Route::get('/development/{development}/lot/edit/{id}', [DevelopmentController::class, 'editDevelopmentLot'])->name('realEstate.development.lot.edit');
    Route::put('/development/{development}/lot/update/{id}', [DevelopmentController::class, 'updateDevelopmentLot'])->name('realEstate.development.lot.update');
    Route::delete('/development/{development}/lot/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentLot'])->name('realEstate.development.lot.delete');
    Route::get('/development/{development}/lot/show/{id}', [DevelopmentController::class, 'showDevelopmentLot'])->name('realEstate.development.lot.show');

    // Development -> metadata
    Route::get('/development/{development}/metadata/create', [DevelopmentController::class, 'createDevelopmentMetadata'])->name('realEstate.development.metadata.create');
    Route::post('/development/{development}/metadata/store', [DevelopmentController::class, 'storeDevelopmentMetadata'])->name('realEstate.development.metadata.store');
    Route::get('/development/{development}/metadata/edit/{id}', [DevelopmentController::class, 'editDevelopmentMetadata'])->name('realEstate.development.metadata.edit');
    Route::put('/development/{development}/metadata/update/{id}', [DevelopmentController::class, 'updateDevelopmentMetadata'])->name('realEstate.development.metadata.update');
    Route::delete('/development/{development}/metadata/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentMetadata'])->name('realEstate.development.metadata.delete');
    Route::get('/development/{development}/metadata/show/{id}', [DevelopmentController::class, 'showDevelopmentMetadata'])->name('realEstate.development.metadata.show');

    // Development -> Lote Types
    Route::get('/development/{development}/lotType/create', [DevelopmentController::class, 'createDevelopmentLoteType'])->name('realEstate.development.lotType.create');
    Route::post('/development/{development}/lotType/store', [DevelopmentController::class, 'storeDevelopmentLoteType'])->name('realEstate.development.lotType.store');
    Route::get('/development/{development}/lotType/edit/{id}', [DevelopmentController::class, 'editDevelopmentLoteType'])->name('realEstate.development.lotType.edit');
    Route::put('/development/{development}/lotType/update/{id}', [DevelopmentController::class, 'updateDevelopmentLoteType'])->name('realEstate.development.lotType.update');
    Route::delete('/development/{development}/lotType/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentLoteType'])->name('realEstate.development.lotType.delete');
    Route::get('/development/{development}/lotType/show/{id}', [DevelopmentController::class, 'showDevelopmentLoteType'])->name('realEstate.development.lotType.show');

    // Development -> Lote Types -> Payment Plans
    Route::get('/development/{development}/lotType/{lotType}/paymentPlan/create', [DevelopmentController::class, 'createDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.lotType.paymentPlan.create');
    Route::post('/development/{development}/lotType/{lotType}/paymentPlan/store', [DevelopmentController::class, 'storeDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.lotType.paymentPlan.store');
    Route::get('/development/{development}/lotType/{lotType}/paymentPlan/edit/{id}', [DevelopmentController::class, 'editDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.lotType.paymentPlan.edit');
    Route::put('/development/{development}/lotType/{lotType}/paymentPlan/update/{id}', [DevelopmentController::class, 'updateDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.lotType.paymentPlan.update');
    Route::delete('/development/{development}/lotType/{lotType}/paymentPlan/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.lotType.paymentPlan.delete');
    Route::get('/development/{development}/lotType/{lotType}/paymentPlan/show/{id}', [DevelopmentController::class, 'showDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.lotType.paymentPlan.show');

    // Property
    Route::get('/property/create', [PropertyController::class, 'createProperty'])->name('realEstate.property.create');
    Route::post('/property/store', [PropertyController::class, 'storeProperty'])->name('realEstate.property.store');
    Route::get('/property/edit/{id}', [PropertyController::class, 'editProperty'])->name('realEstate.property.edit');
    Route::put('/property/update/{id}', [PropertyController::class, 'updateProperty'])->name('realEstate.property.update');
    Route::delete('/property/delete/{id}', [PropertyController::class, 'deleteProperty'])->name('realEstate.property.delete');
    Route::get('/property/show/{id}', [PropertyController::class, 'showProperty'])->name('realEstate.property.show');

    // Lead
    Route::get('/lead/create', [LeadController::class, 'createLead'])->name('realEstate.lead.create');
    Route::post('/lead/store', [LeadController::class, 'storeLead'])->name('realEstate.lead.store');
    Route::get('/lead/edit/{id}', [LeadController::class, 'editLead'])->name('realEstate.lead.edit');
    Route::put('/lead/update/{id}', [LeadController::class, 'updateLead'])->name('realEstate.lead.update');
    Route::delete('/lead/delete/{id}', [LeadController::class, 'deleteLead'])->name('realEstate.lead.delete');
    Route::get('/lead/show/{id}', [LeadController::class, 'showLead'])->name('realEstate.lead.show');

    // Payment
    Route::get('/payment/create', [PaymentController::class, 'createPayment'])->name('realEstate.payment.create');
    Route::post('/payment/store', [PaymentController::class, 'storePayment'])->name('realEstate.payment.store');
    Route::get('/payment/edit/{id}', [PaymentController::class, 'editPayment'])->name('realEstate.payment.edit');
    Route::put('/payment/update/{id}', [PaymentController::class, 'updatePayment'])->name('realEstate.payment.update');
    Route::delete('/payment/delete/{id}', [PaymentController::class, 'deletePayment'])->name('realEstate.payment.delete');
    Route::get('/payment/show/{id}', [PaymentController::class, 'showPayment'])->name('realEstate.payment.show');

    // Invoice
    Route::get('/invoice/create', [InvoiceController::class, 'createInvoice'])->name('realEstate.invoice.create');
    Route::post('/invoice/store', [InvoiceController::class, 'storeInvoice'])->name('realEstate.invoice.store');
    Route::get('/invoice/edit/{id}', [InvoiceController::class, 'editInvoice'])->name('realEstate.invoice.edit');
    Route::put('/invoice/update/{id}', [InvoiceController::class, 'updateInvoice'])->name('realEstate.invoice.update');
    Route::delete('/invoice/delete/{id}', [InvoiceController::class, 'deleteInvoice'])->name('realEstate.invoice.delete');
    Route::get('/invoice/show/{id}', [InvoiceController::class, 'showInvoice'])->name('realEstate.invoice.show');

    // Report
    Route::get('/report/create', [ReportController::class, 'createReport'])->name('realEstate.report.create');
    Route::post('/report/store', [ReportController::class, 'storeReport'])->name('realEstate.report.store');
    Route::get('/report/edit/{id}', [ReportController::class, 'editReport'])->name('realEstate.report.edit');
    Route::put('/report/update/{id}', [ReportController::class, 'updateReport'])->name('realEstate.report.update');
    Route::delete('/report/delete/{id}', [ReportController::class, 'deleteReport'])->name('realEstate.report.delete');
    Route::get('/report/show/{id}', [ReportController::class, 'showReport'])->name('realEstate.report.show');

    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('realEstate.logout');
});
