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


}
