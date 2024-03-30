<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
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
}
