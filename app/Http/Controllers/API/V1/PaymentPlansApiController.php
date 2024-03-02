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

    public function getPaymentPlans(){
        $paymentPlans = PaymentPlan::all();
        return response()->success(['payment_plans' => $paymentPlans], ["code" => 200, "message" => "Financiamientos"]);
    }

    public function paymentPlanDetails($id){
        $paymentPlan = PaymentPlan::find($id);
        return response()->success(['payment_plan' => $paymentPlan], ["code" => 200, "message" => "Financiamiento"]);
    }

    public function updatePaymentPlan($id, Request $request){
        $paymentPlan = PaymentPlan::find($id);
        $paymentPlan->name = $request["name"];
        $paymentPlan->description = $request["description"];
        $paymentPlan->financing_months = $request["financing_months"];
        $paymentPlan->save();

        return response()->success(['payment_plan' => $paymentPlan], ["code" => 200, "message" => "Financiamiento actualizado correctamente"]);
    }

    public function deletePaymentPlan($id){
        $paymentPlan = PaymentPlan::find($id);
        $paymentPlan->delete();

        return response()->success(['payment_plan' => $paymentPlan], ["code" => 200, "message" => "Financiamiento eliminado correctamente"]);
    }
}
