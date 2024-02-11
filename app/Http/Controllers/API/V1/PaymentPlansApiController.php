<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\PaymentPlan;
use Illuminate\Http\Request;

class PaymentPlansApiController extends Controller
{
    //
    public function createPaymentPlan(Request $request) {
        $paymentPlan = new PaymentPlan();
        $paymentPlan->name = $request["name"];
        $paymentPlan->description = $request["description"];
        $paymentPlan->financing_months = $request["financing_months"];
        $paymentPlan->save();

        return response()->success(['payment_plan' => $paymentPlan], ["code" => 200, "message" => "Financiamiento agregado correctamente"]);
    }
}
