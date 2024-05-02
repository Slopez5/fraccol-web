<?php

use App\Http\Controllers\RealEstate\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEstate\DashboardController;
use App\Http\Controllers\RealEstate\UserController;
use App\Http\Controllers\RealEstate\AppointmentController;
use App\Http\Controllers\RealEstate\ExpenseController;
use App\Http\Controllers\RealEstate\DevelopmentController;
use App\Http\Controllers\RealEstate\PropertyController;
use App\Http\Controllers\RealEstate\LeadController;
use App\Http\Controllers\RealEstate\PaymentController;
use App\Http\Controllers\RealEstate\InvoiceController;
use App\Http\Controllers\RealEstate\ReportController;
use App\Http\Controllers\RealEstate\SettingsController;

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
    Route::get('/expenses', [DashboardController::class, 'expenses'])->name('realEstate.expenses');
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

    // Expenses
    Route::get('/expense/create', [ExpenseController::class, 'createExpense'])->name('realEstate.expense.create');
    Route::post('/expense/store', [ExpenseController::class, 'storeExpense'])->name('realEstate.expense.store');
    Route::get('/expense/edit/{id}', [ExpenseController::class, 'editExpense'])->name('realEstate.expense.edit');
    Route::put('/expense/update/{id}', [ExpenseController::class, 'updateExpense'])->name('realEstate.expense.update');
    Route::delete('/expense/delete/{id}', [ExpenseController::class, 'deleteExpense'])->name('realEstate.expense.delete');
    Route::get('/expense/show/{id}', [ExpenseController::class, 'showExpense'])->name('realEstate.expense.show');

    // Development
    Route::get('/development/create', [DevelopmentController::class, 'createDevelopment'])->name('realEstate.development.create');
    Route::post('/development/store', [DevelopmentController::class, 'storeDevelopment'])->name('realEstate.development.store');
    Route::get('/development/edit/{id}', [DevelopmentController::class, 'editDevelopment'])->name('realEstate.development.edit');
    Route::put('/development/update/{id}', [DevelopmentController::class, 'updateDevelopment'])->name('realEstate.development.update');
    Route::delete('/development/delete/{id}', [DevelopmentController::class, 'deleteDevelopment'])->name('realEstate.development.delete');
    Route::get('/development/show/{id}', [DevelopmentController::class, 'showDevelopment'])->name('realEstate.development.show');


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
    Route::delete('/development/{development}/lotType/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentLoteType'])->name('realEstate.development.lotType.delete');
    Route::get('/development/{development}/lotType/show/{id}', [DevelopmentController::class, 'showDevelopmentLoteType'])->name('realEstate.development.lotType.show');

    // Development -> Lote Types -> Payment Plans
    Route::get('/development/{development}/paymentPlan/create', [DevelopmentController::class, 'createDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.paymentPlan.create');
    Route::post('/development/{development}/paymentPlan/store', [DevelopmentController::class, 'storeDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.paymentPlan.store');
    Route::delete('/development/{development}/paymentPlan/delete/{loteTypeId}', [DevelopmentController::class, 'deleteDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.paymentPlan.delete');
    Route::get('/development/{development}/paymentPlan/show/{id}', [DevelopmentController::class, 'showDevelopmentLoteTypePaymentPlan'])->name('realEstate.development.paymentPlan.show');

    // Property
    Route::get('/property/create', [PropertyController::class, 'createProperty'])->name('realEstate.property.create');
    Route::post('/property/store', [PropertyController::class, 'storeProperty'])->name('realEstate.property.store');
    Route::get('/property/edit/{id}', [PropertyController::class, 'editProperty'])->name('realEstate.property.edit');
    Route::put('/property/update/{id}', [PropertyController::class, 'updateProperty'])->name('realEstate.property.update');
    Route::delete('/property/delete/{id}', [PropertyController::class, 'deleteProperty'])->name('realEstate.property.delete');
    Route::get('/property/show/{id}', [PropertyController::class, 'showProperty'])->name('realEstate.property.show');

    // Lead
    Route::get('/lead/create', [LeadController::class, 'createLead'])->name('realEstate.lead.create');
    Route::get('/lead/import', [LeadController::class, 'importLead'])->name('realEstate.lead.import');
    Route::post('/lead/import', [LeadController::class, 'importLeadStore'])->name('realEstate.lead.import');
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


    //Settings
    Route::get('/settings/expenses/categories', [SettingsController::class, 'expenseCategories'])->name('realEstate.settings.expenseCategories');
    Route::get('/settings/expenses/categories/create', [SettingsController::class, 'createExpenseCategory'])->name('realEstate.settings.expenseCategories.create');
    Route::post('/settings/expenses/categories/store', [SettingsController::class, 'storeExpenseCategory'])->name('realEstate.settings.expenseCategories.store');
    Route::get('/settings/expenses/categories/edit/{id}', [SettingsController::class, 'editExpenseCategory'])->name('realEstate.settings.expenseCategories.edit');
    Route::put('/settings/expenses/categories/update/{id}', [SettingsController::class, 'updateExpenseCategory'])->name('realEstate.settings.expenseCategories.update');
    Route::delete('/settings/expenses/categories/delete/{id}', [SettingsController::class, 'deleteExpenseCategory'])->name('realEstate.settings.expenseCategories.delete');
    
    Route::get('/settings/property_types', [SettingsController::class, 'propertyTypes'])->name('realEstate.settings.propertyTypes');
    Route::get('/settings/lote_types', [SettingsController::class, 'loteTypes'])->name('realEstate.settings.loteTypes');
    Route::get('/settings/payment_plans', [SettingsController::class, 'paymentPlans'])->name('realEstate.settings.paymentPlans');
    Route::get('/settings/counties', [SettingsController::class, 'counties'])->name('realEstate.settings.counties');
    Route::get('/settings/contracts', [SettingsController::class, 'contracts'])->name('realEstate.settings.contracts');


    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('realEstate.logout');
});
