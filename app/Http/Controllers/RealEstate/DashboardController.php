<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Development;
use App\Models\Invoice;
use App\Models\Lead;
use App\Models\Lot;
use App\Models\Payment;
use App\Models\Permission;
use App\Models\User;
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
        $users = User::where('role_id',3)->get();
        return view('realEstates.users', compact('users'));
    }

    public function appointments()
    {
        $appointments = Appointment::all();
        return view('realEstates.appointments', compact('appointments'));
    }

    public function permissions()
    {
        $permissions = Permission::all();
        return view('realEstates.permissions', compact('permissions'));
    }

    public function developments()
    {
        $developments = Development::all();

        return view('realEstates.developments', compact('developments'));
    }

    public function properties()
    {
        $properties = Lot::all();
        return view('realEstates.properties', compact('properties'));
    }

    public function leads()
    {

        $leads = Lead::all();
        return view('realEstates.leads', compact('leads'));
    }

    public function payments()
    {
        $payments = Payment::all();
        return view('realEstates.payments', compact('payments') );
    }

    public function invoices()
    {
        $invoices = Invoice::all();
        return view('realEstates.invoices', compact('invoices') );
    }

    public function reports()
    {
        $reports = [];
        return view('realEstates.reports', compact('reports'));
    }

    //settings
    public function settings()
    {
        return view('realEstates.settings');
    }

    public function loteTypes()
    {
        return view('realEstates.settings.loteTypes');
    }

    public function paymentPlans()
    {
        return view('realEstates.settings.paymentPlans');
    }

    public function countries()
    {
        return view('realEstates.settings.countries');
    }

    public function states()
    {
        return view('realEstates.settings.states');
    }

    public function cities()
    {
        return view('realEstates.settings.cities');
    }



}
