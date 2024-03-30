<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
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
}
