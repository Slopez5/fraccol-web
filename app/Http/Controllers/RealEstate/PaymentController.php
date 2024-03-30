<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
}
