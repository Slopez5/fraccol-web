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
use App\Http\Controllers\RealEstate\SalesController;
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
    Route::get('/sales', [DashboardController::class, 'sales'])->name('realEstate.sales');
    Route::get('/appointments', [DashboardController::class, 'appointments'])->name('realEstate.appointments');
    Route::get('/expenses', [DashboardController::class, 'expenses'])->name('realEstate.expenses');
    Route::get('/developments', [DashboardController::class, 'developments'])->name('realEstate.developments');
    Route::get('/properties', [DashboardController::class, 'properties'])->name('realEstate.properties');
    Route::get('/leads', [DashboardController::class, 'leads'])->name('realEstate.leads');
    Route::get('/payments', [DashboardController::class, 'payments'])->name('realEstate.payments');
    Route::get('/invoices', [DashboardController::class, 'invoices'])->name('realEstate.invoices');
    Route::get('/reports', [DashboardController::class, 'reports'])->name('realEstate.reports');

    // Users
    Route::get('/user/create', [UserController::class, 'createUser'])->name('realEstate.user.create');
    Route::post('/user/store', [UserController::class, 'storeUser'])->name('realEstate.user.store');
    Route::get('/user/edit/{id}', [UserController::class, 'editUser'])->name('realEstate.user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'updateUser'])->name('realEstate.user.update');
    Route::delete('/user/delete/{id}', [UserController::class, 'deleteUser'])->name('realEstate.user.delete');
    Route::get('/user/show/{id}', [UserController::class, 'showUser'])->name('realEstate.user.show');

    // Sales
    Route::get('/sale/create', [SalesController::class, 'createSale'])->name('realEstate.sale.create');
    Route::post('/sale/store', [SalesController::class, 'storeSale'])->name('realEstate.sale.store');
    Route::get('/sale/edit/{id}', [SalesController::class, 'editSale'])->name('realEstate.sale.edit');
    Route::put('/sale/update/{id}', [SalesController::class, 'updateSale'])->name('realEstate.sale.update');
    Route::delete('/sale/delete/{id}', [SalesController::class, 'deleteSale'])->name('realEstate.sale.delete');
    Route::get('/sale/show/{id}', [SalesController::class, 'showSale'])->name('realEstate.sale.show');

    // Appointments
    Route::get('/appointment/create', [AppointmentController::class, 'createAppointment'])->name('realEstate.appointment.create');
    Route::post('/appointment/store', [AppointmentController::class, 'storeAppointment'])->name('realEstate.appointment.store');
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'editAppointment'])->name('realEstate.appointment.edit');
    Route::put('/appointment/update/{id}', [AppointmentController::class, 'updateAppointment'])->name('realEstate.appointment.update');
    Route::delete('/appointment/delete/{id}', [AppointmentController::class, 'deleteAppointment'])->name('realEstate.appointment.delete');
    Route::get('/appointment/show/{id}', [AppointmentController::class, 'showAppointment'])->name('realEstate.appointment.show');

    //Appointment -> Activities
    Route::get('/appointment/{appointment}/activities', [AppointmentController::class, 'activities'])->name('realEstate.appointment.activities');
    Route::get('/appointment/{appointment}/activity/create', [AppointmentController::class, 'createActivity'])->name('realEstate.appointment.activity.create');
    Route::post('/appointment/{appointment}/activity/store', [AppointmentController::class, 'storeActivity'])->name('realEstate.appointment.activity.store');
    Route::get('/appointment/{appointment}/activity/edit/{id}', [AppointmentController::class, 'editActivity'])->name('realEstate.appointment.activity.edit');
    Route::put('/appointment/{appointment}/activity/update/{id}', [AppointmentController::class, 'updateActivity'])->name('realEstate.appointment.activity.update');
    Route::delete('/appointment/{appointment}/activity/delete/{id}', [AppointmentController::class, 'deleteActivity'])->name('realEstate.appointment.activity.delete');
    Route::get('/appointment/{appointment}/activity/show/{id}', [AppointmentController::class, 'showActivity'])->name('realEstate.appointment.activity.show');

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

    // Development Map Interactive
    Route::get('/development/{development}/map', [DevelopmentController::class, 'mapDevelopment'])->name('realEstate.development.map');


    // Development -> Lotes
    Route::get('/development/{development}/lote/create', [DevelopmentController::class, 'createDevelopmentLote'])->name('realEstate.development.lote.create');
    Route::post('/development/{development}/lote/store', [DevelopmentController::class, 'storeDevelopmentLote'])->name('realEstate.development.lote.store');
    Route::get('/development/{development}/lote/edit/{id}', [DevelopmentController::class, 'editDevelopmentLote'])->name('realEstate.development.lote.edit');
    Route::put('/development/{development}/lote/update/{id}', [DevelopmentController::class, 'updateDevelopmentLote'])->name('realEstate.development.lote.update');
    Route::delete('/development/{development}/lote/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentLote'])->name('realEstate.development.lote.delete');
    Route::get('/development/{development}/lot/show/{id}', [DevelopmentController::class, 'showDevelopmentLote'])->name('realEstate.development.lote.show');

    // Development -> metadata
    Route::get('/development/{development}/metadata/create', [DevelopmentController::class, 'createDevelopmentMetadata'])->name('realEstate.development.metadata.create');
    Route::post('/development/{development}/metadata/store', [DevelopmentController::class, 'storeDevelopmentMetadata'])->name('realEstate.development.metadata.store');
    Route::get('/development/{development}/metadata/edit/{id}', [DevelopmentController::class, 'editDevelopmentMetadata'])->name('realEstate.development.metadata.edit');
    Route::put('/development/{development}/metadata/update/{id}', [DevelopmentController::class, 'updateDevelopmentMetadata'])->name('realEstate.development.metadata.update');
    Route::delete('/development/{development}/metadata/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentMetadata'])->name('realEstate.development.metadata.delete');
    Route::get('/development/{development}/metadata/show/{id}', [DevelopmentController::class, 'showDevelopmentMetadata'])->name('realEstate.development.metadata.show');

    // Development -> Lote Types
    Route::get('/development/{development}/loteType/create', [DevelopmentController::class, 'createDevelopmentLoteType'])->name('realEstate.development.loteType.create');
    Route::post('/development/{development}/loteType/store', [DevelopmentController::class, 'storeDevelopmentLoteType'])->name('realEstate.development.loteType.store');
    Route::delete('/development/{development}/loteType/delete/{id}', [DevelopmentController::class, 'deleteDevelopmentLoteType'])->name('realEstate.development.loteType.delete');
    Route::get('/development/{development}/loteType/show/{id}', [DevelopmentController::class, 'showDevelopmentLoteType'])->name('realEstate.development.loteType.show');

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
    Route::get('/settings/activity/categories', [SettingsController::class, 'activityCategories'])->name('realEstate.settings.activityCategories');
    Route::get('/settings/activity/categories/create', [SettingsController::class, 'createActivityCategory'])->name('realEstate.settings.activityCategories.create');
    Route::post('/settings/activity/categories/store', [SettingsController::class, 'storeActivityCategory'])->name('realEstate.settings.activityCategories.store');
    Route::get('/settings/activity/categories/edit/{id}', [SettingsController::class, 'editActivityCategory'])->name('realEstate.settings.activityCategories.edit');
    Route::put('/settings/activity/categories/update/{id}', [SettingsController::class, 'updateActivityCategory'])->name('realEstate.settings.activityCategories.update');
    Route::delete('/settings/activity/categories/delete/{id}', [SettingsController::class, 'deleteActivityCategory'])->name('realEstate.settings.activityCategories.delete');


    // Expenses
    Route::get('/settings/expenses/categories', [SettingsController::class, 'expenseCategories'])->name('realEstate.settings.expenseCategories');
    Route::get('/settings/expenses/categories/create', [SettingsController::class, 'createExpenseCategory'])->name('realEstate.settings.expenseCategories.create');
    Route::post('/settings/expenses/categories/store', [SettingsController::class, 'storeExpenseCategory'])->name('realEstate.settings.expenseCategories.store');
    Route::get('/settings/expenses/categories/edit/{id}', [SettingsController::class, 'editExpenseCategory'])->name('realEstate.settings.expenseCategories.edit');
    Route::put('/settings/expenses/categories/update/{id}', [SettingsController::class, 'updateExpenseCategory'])->name('realEstate.settings.expenseCategories.update');
    Route::delete('/settings/expenses/categories/delete/{id}', [SettingsController::class, 'deleteExpenseCategory'])->name('realEstate.settings.expenseCategories.delete');
    
    // Real Estate
    Route::get('/settings/real_estate/agencies', [SettingsController::class, 'realEstateAgencies'])->name('realEstate.settings.realEstateAgencies');
    Route::get('/settings/real_estate/agency/create', [SettingsController::class, 'createRealEstateAgency'])->name('realEstate.settings.realEstateAgency.create');
    Route::post('/settings/real_estate/agency/store', [SettingsController::class, 'storeRealEstateAgency'])->name('realEstate.settings.realEstateAgency.store');
    Route::get('/settings/real_estate/agency/edit/{id}', [SettingsController::class, 'editRealEstateAgency'])->name('realEstate.settings.realEstateAgency.edit');
    Route::put('/settings/real_estate/agency/update/{id}', [SettingsController::class, 'updateRealEstateAgency'])->name('realEstate.settings.realEstateAgency.update');
    Route::delete('/settings/real_estate/agency/delete/{id}', [SettingsController::class, 'deleteRealEstateAgency'])->name('realEstate.settings.realEstateAgency.delete');
    
    // Real Estate Branches
    Route::get('/settings/real_estate/branches', [SettingsController::class, 'realEstateBranches'])->name('realEstate.settings.realEstateBranches');
    Route::get('/settings/real_estate/branch/create', [SettingsController::class, 'createRealEstateBranch'])->name('realEstate.settings.realEstateBranch.create');
    Route::post('/settings/real_estate/branch/store', [SettingsController::class, 'storeRealEstateBranch'])->name('realEstate.settings.realEstateBranch.store');
    Route::get('/settings/real_estate/branch/edit/{id}', [SettingsController::class, 'editRealEstateBranch'])->name('realEstate.settings.realEstateBranch.edit');
    Route::put('/settings/real_estate/branch/update/{id}', [SettingsController::class, 'updateRealEstateBranch'])->name('realEstate.settings.realEstateBranch.update');
    Route::delete('/settings/real_estate/branch/delete/{id}', [SettingsController::class, 'deleteRealEstateBranch'])->name('realEstate.settings.realEstateBranch.delete');
    
    // Invoices
    Route::get('/settings/invoices/statuses', [SettingsController::class, 'invoiceStatuses'])->name('realEstate.settings.invoiceStatuses');
    Route::get('/settings/invoices/status/create', [SettingsController::class, 'createInvoiceStatus'])->name('realEstate.settings.invoiceStatus.create');
    Route::post('/settings/invoices/status/store', [SettingsController::class, 'storeInvoiceStatus'])->name('realEstate.settings.invoiceStatus.store');
    Route::get('/settings/invoices/status/edit/{id}', [SettingsController::class, 'editInvoiceStatus'])->name('realEstate.settings.invoiceStatus.edit');
    Route::put('/settings/invoices/status/update/{id}', [SettingsController::class, 'updateInvoiceStatus'])->name('realEstate.settings.invoiceStatus.update');
    Route::delete('/settings/invoices/status/delete/{id}', [SettingsController::class, 'deleteInvoiceStatus'])->name('realEstate.settings.invoiceStatus.delete');
    
    // Lotes Statuses
    Route::get('/settings/lotes/statuses', [SettingsController::class, 'loteStatuses'])->name('realEstate.settings.loteStatuses');
    Route::get('/settings/lotes/status/create', [SettingsController::class, 'createLoteStatus'])->name('realEstate.settings.loteStatus.create');
    Route::post('/settings/lotes/status/store', [SettingsController::class, 'storeLoteStatus'])->name('realEstate.settings.loteStatus.store');
    Route::get('/settings/lotes/status/edit/{id}', [SettingsController::class, 'editLoteStatus'])->name('realEstate.settings.loteStatus.edit');
    Route::put('/settings/lotes/status/update/{id}', [SettingsController::class, 'updateLoteStatus'])->name('realEstate.settings.loteStatus.update');
    Route::delete('/settings/lotes/status/delete/{id}', [SettingsController::class, 'deleteLoteStatus'])->name('realEstate.settings.loteStatus.delete');
    
    // Lotes Types
    Route::get('/settings/lotes/types', [SettingsController::class, 'loteTypes'])->name('realEstate.settings.loteTypes');
    Route::get('/settings/lotes/type/create', [SettingsController::class, 'createLoteType'])->name('realEstate.settings.loteType.create');
    Route::post('/settings/lotes/type/store', [SettingsController::class, 'storeLoteType'])->name('realEstate.settings.loteType.store');
    Route::get('/settings/lotes/type/edit/{id}', [SettingsController::class, 'editLoteType'])->name('realEstate.settings.loteType.edit');
    Route::put('/settings/lotes/type/update/{id}', [SettingsController::class, 'updateLoteType'])->name('realEstate.settings.loteType.update');
    Route::delete('/settings/lotes/type/delete/{id}', [SettingsController::class, 'deleteLoteType'])->name('realEstate.settings.loteType.delete');
    
    // Payment Plans
    Route::get('/settings/payment_plans/types', [SettingsController::class, 'paymentPlans'])->name('realEstate.settings.paymentPlans');
    Route::get('/settings/payment_plans/type/create', [SettingsController::class, 'createPaymentPlan'])->name('realEstate.settings.paymentPlan.create');
    Route::post('/settings/payment_plans/type/store', [SettingsController::class, 'storePaymentPlan'])->name('realEstate.settings.paymentPlan.store');
    Route::get('/settings/payment_plans/type/edit/{id}', [SettingsController::class, 'editPaymentPlan'])->name('realEstate.settings.paymentPlan.edit');
    Route::put('/settings/payment_plans/type/update/{id}', [SettingsController::class, 'updatePaymentPlan'])->name('realEstate.settings.paymentPlan.update');
    Route::delete('/settings/payment_plans/type/delete/{id}', [SettingsController::class, 'deletePaymentPlan'])->name('realEstate.settings.paymentPlan.delete');
    
    // Payment Methods
    Route::get('/settings/payments/methods', [SettingsController::class, 'paymentMethods'])->name('realEstate.settings.paymentMethods');
    Route::get('/settings/payments/method/create', [SettingsController::class, 'createPaymentMethod'])->name('realEstate.settings.paymentMethod.create');
    Route::post('/settings/payments/method/store', [SettingsController::class, 'storePaymentMethod'])->name('realEstate.settings.paymentMethod.store');
    Route::get('/settings/payments/method/edit/{id}', [SettingsController::class, 'editPaymentMethod'])->name('realEstate.settings.paymentMethod.edit');
    Route::put('/settings/payments/method/update/{id}', [SettingsController::class, 'updatePaymentMethod'])->name('realEstate.settings.paymentMethod.update');
    Route::delete('/settings/payments/method/delete/{id}', [SettingsController::class, 'deletePaymentMethod'])->name('realEstate.settings.paymentMethod.delete');
    
    // Payment Statuses
    Route::get('/settings/payments/statuses', [SettingsController::class, 'paymentStatuses'])->name('realEstate.settings.paymentStatuses');
    Route::get('/settings/payments/status/create', [SettingsController::class, 'createPaymentStatus'])->name('realEstate.settings.paymentStatus.create');
    Route::post('/settings/payments/status/store', [SettingsController::class, 'storePaymentStatus'])->name('realEstate.settings.paymentStatus.store');
    Route::get('/settings/payments/status/edit/{id}', [SettingsController::class, 'editPaymentStatus'])->name('realEstate.settings.paymentStatus.edit');
    Route::put('/settings/payments/status/update/{id}', [SettingsController::class, 'updatePaymentStatus'])->name('realEstate.settings.paymentStatus.update');
    Route::delete('/settings/payments/status/delete/{id}', [SettingsController::class, 'deletePaymentStatus'])->name('realEstate.settings.paymentStatus.delete');
    
    // Countries
    Route::get('/settings/countries', [SettingsController::class, 'countries'])->name('realEstate.settings.countries');
    Route::get('/settings/countries/create', [SettingsController::class, 'createCountry'])->name('realEstate.settings.countries.create');
    Route::post('/settings/countries/store', [SettingsController::class, 'storeCountry'])->name('realEstate.settings.countries.store');
    Route::get('/settings/countries/edit/{id}', [SettingsController::class, 'editCountry'])->name('realEstate.settings.countries.edit');
    Route::put('/settings/countries/update/{id}', [SettingsController::class, 'updateCountry'])->name('realEstate.settings.countries.update');
    Route::delete('/settings/countries/delete/{id}', [SettingsController::class, 'deleteCountry'])->name('realEstate.settings.countries.delete');
    
    // Contracts
    Route::get('/settings/contracts', [SettingsController::class, 'contracts'])->name('realEstate.settings.contracts');
    Route::get('/settings/contracts/create', [SettingsController::class, 'createContract'])->name('realEstate.settings.contracts.create');
    Route::post('/settings/contracts/store', [SettingsController::class, 'storeContract'])->name('realEstate.settings.contracts.store');
    Route::get('/settings/contracts/edit/{id}', [SettingsController::class, 'editContract'])->name('realEstate.settings.contracts.edit');
    Route::put('/settings/contracts/update/{id}', [SettingsController::class, 'updateContract'])->name('realEstate.settings.contracts.update');
    Route::delete('/settings/contracts/delete/{id}', [SettingsController::class, 'deleteContract'])->name('realEstate.settings.contracts.delete');
    
    // Units Types
    Route::get('/settings/units/types', [SettingsController::class, 'unitTypes'])->name('realEstate.settings.unitTypes');
    Route::get('/settings/units/type/create', [SettingsController::class, 'createUnitType'])->name('realEstate.settings.unitType.create');
    Route::post('/settings/units/type/store', [SettingsController::class, 'storeUnitType'])->name('realEstate.settings.unitType.store');
    Route::get('/settings/units/type/edit/{id}', [SettingsController::class, 'editUnitType'])->name('realEstate.settings.unitType.edit');
    Route::put('/settings/units/type/update/{id}', [SettingsController::class, 'updateUnitType'])->name('realEstate.settings.unitType.update');
    Route::delete('/settings/units/type/delete/{id}', [SettingsController::class, 'deleteUnitType'])->name('realEstate.settings.unitType.delete');
    
    // Property Types
    Route::get('/settings/property/types', [SettingsController::class, 'propertyTypes'])->name('realEstate.settings.propertyTypes');
    Route::get('/settings/property/type/create', [SettingsController::class, 'createPropertyType'])->name('realEstate.settings.propertyType.create');
    Route::post('/settings/property/type/store', [SettingsController::class, 'storePropertyType'])->name('realEstate.settings.propertyType.store');
    Route::get('/settings/property/type/edit/{id}', [SettingsController::class, 'editPropertyType'])->name('realEstate.settings.propertyType.edit');
    Route::put('/settings/property/type/update/{id}', [SettingsController::class, 'updatePropertyType'])->name('realEstate.settings.propertyType.update');
    Route::delete('/settings/property/type/delete/{id}', [SettingsController::class, 'deletePropertyType'])->name('realEstate.settings.propertyType.delete');



    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('realEstate.logout');
});
