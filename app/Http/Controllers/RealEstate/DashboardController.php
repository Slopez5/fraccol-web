<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Development;
use App\Models\Invoice;
use App\Models\Lead;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard

    public function index()
    {
        $developments = Development::all();
        $leads = Lead::all();
        $invoices = Invoice::all();
        $appointments = Appointment::all();
        return view('realEstates.home', compact('developments', 'leads', 'invoices', 'appointments'));
    }

    public function users()
    {
        return view('realEstates.users');
    }

    public function appointments()
    {
        return view('realEstates.appointments');
    }

    public function permissions()
    {
        return view('realEstates.permissions');
    }

    public function developments()
    {
        return view('realEstates.developments');
    }

    public function properties()
    {
        return view('realEstates.properties');
    }

    public function leads()
    {
        return view('realEstates.leads');
    }

    public function payments()
    {
        return view('realEstates.payments');
    }

    public function invoices()
    {
        return view('realEstates.invoices');
    }

    public function reports()
    {
        return view('realEstates.reports');
    }

    // Users
    public function createUser()
    {
        return view('realEstates.users.create');
    }

    public function storeUser(Request $request)
    {
        return redirect()->route('realEstate.users');
    }

    public function editUser($id)
    {
        return view('realEstates.users.edit');
    }

    public function updateUser(Request $request, $id)
    {
        return redirect()->route('realEstate.users');
    }

    public function deleteUser($id)
    {
        return redirect()->route('realEstate.users');
    }

    public function showUser($id)
    {
        return view('realEstates.users.show');
    }

    // Appointments

    public function createAppointment()
    {
        return view('realEstates.appointments.create');
    }

    public function storeAppointment(Request $request)
    {
        return redirect()->route('realEstate.appointments');
    }

    public function editAppointment($id)
    {
        return view('realEstates.appointments.edit');
    }

    public function updateAppointment(Request $request, $id)
    {
        return redirect()->route('realEstate.appointments');
    }

    public function deleteAppointment($id)
    {
        return redirect()->route('realEstate.appointments');
    }

    public function showAppointment($id)
    {
        return view('realEstates.appointments.show');
    }

    // Permissions

    public function createPermission()
    {
        return view('realEstates.permissions.create');
    }

    public function storePermission(Request $request)
    {
        return redirect()->route('realEstate.permissions');
    }

    public function editPermission($id)
    {
        return view('realEstates.permissions.edit');
    }

    public function updatePermission(Request $request, $id)
    {
        return redirect()->route('realEstate.permissions');
    }

    public function deletePermission($id)
    {
        return redirect()->route('realEstate.permissions');
    }

    public function showPermission($id)
    {
        return view('realEstates.permissions.show');
    }

    // Development

    public function createDevelopment()
    {
        return view('realEstates.developments.create');
    }

    public function storeDevelopment(Request $request)
    {
        return redirect()->route('realEstate.developments');
    }

    public function editDevelopment($id)
    {
        return view('realEstates.developments.edit');
    }

    public function updateDevelopment(Request $request, $id)
    {
        return redirect()->route('realEstate.developments');
    }

    public function deleteDevelopment($id)
    {
        return redirect()->route('realEstate.developments');
    }

    public function showDevelopment($id)
    {
        return view('realEstates.developments.show');
    }

    // Property

    public function createProperty()
    {
        return view('realEstates.properties.create');
    }

    public function storeProperty(Request $request)
    {
        return redirect()->route('realEstate.properties');
    }

    public function editProperty($id)
    {
        return view('realEstates.properties.edit');
    }

    public function updateProperty(Request $request, $id)
    {
        return redirect()->route('realEstate.properties');
    }

    public function deleteProperty($id)
    {
        return redirect()->route('realEstate.properties');
    }

    public function showProperty($id)
    {
        return view('realEstates.properties.show');
    }

    // Lead
    public function createLead()
    {
        return view('realEstates.leads.create');
    }

    public function storeLead(Request $request)
    {
        return redirect()->route('realEstate.leads');
    }

    public function editLead($id)
    {
        return view('realEstates.leads.edit');
    }

    public function updateLead(Request $request, $id)
    {
        return redirect()->route('realEstate.leads');
    }

    public function deleteLead($id)
    {
        return redirect()->route('realEstate.leads');
    }

    public function showLead($id)
    {
        return view('realEstates.leads.show');
    }

    // Payment

    public function createPayment()
    {
        return view('realEstates.payments.create');
    }

    public function storePayment(Request $request)
    {
        return redirect()->route('realEstate.payments');
    }

    public function editPayment($id)
    {
        return view('realEstates.payments.edit');
    }

    public function updatePayment(Request $request, $id)
    {
        return redirect()->route('realEstate.payments');
    }

    public function deletePayment($id)
    {
        return redirect()->route('realEstate.payments');
    }

    public function showPayment($id)
    {
        return view('realEstates.payments.show');
    }

    // Invoice

    public function createInvoice()
    {
        return view('realEstates.invoices.create');
    }

    public function storeInvoice(Request $request)
    {
        return redirect()->route('realEstate.invoices');
    }

    public function editInvoice($id)
    {
        return view('realEstates.invoices.edit');
    }

    public function updateInvoice(Request $request, $id)
    {
        return redirect()->route('realEstate.invoices');
    }

    public function deleteInvoice($id)
    {
        return redirect()->route('realEstate.invoices');
    }

    public function showInvoice($id)
    {
        return view('realEstates.invoices.show');
    }

    // Report

    public function createReport()
    {
        return view('realEstates.reports.create');
    }

    public function storeReport(Request $request)
    {
        return redirect()->route('realEstate.reports');
    }

    public function editReport($id)
    {
        return view('realEstates.reports.edit');
    }

    public function updateReport(Request $request, $id)
    {
        return redirect()->route('realEstate.reports');
    }

    public function deleteReport($id)
    {
        return redirect()->route('realEstate.reports');
    }

    public function showReport($id)
    {
        return view('realEstates.reports.show');
    }

    // Logout

    public function logout()
    {
        return redirect()->route('realEstate.logout');
    }


    
}
