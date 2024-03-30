<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
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
}
