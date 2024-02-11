<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Development;
use App\Models\Lot;
use App\Models\LotType;
use App\Models\Metadata;
use App\Models\PaymentPlan;
use Illuminate\Http\Request;

class DevelopmentApiController extends Controller
{

    public function createDevelopment(Request $reuqest)
    {
        $development = new Development();
        $development->real_estate_id = $reuqest['real_estate_id'];
        $development->real_estate_branch_id = $reuqest['real_estate_branch_id'];
        $development->name = $reuqest["name"];
        if ($reuqest['logo']) {
            $development->logo = $reuqest['logo'];
        }
        if ($reuqest['blueprint']) {
            $development->blueprint = $reuqest['blueprint'];
        }
        if ($reuqest['location']) {
            $development->location = $reuqest['location'];
        }
        if ($reuqest['total_land_area']) {
            $development->total_land_area = $reuqest['total_land_area'];
        }
        $development->total_lots = $reuqest['total_lots'];
        $development->available_lots = $reuqest['available_lots'];
        if ($reuqest['start_date']) {

            $development->start_date = $reuqest['start_date'];
        }
        if ($reuqest['end_date']) {

            $development->end_date = $reuqest['end_date'];
        }
        if ($reuqest['sort_description']) {

            $development->sort_description = $reuqest['sort_description'];
        }
        if ($reuqest['full_description']) {

            $development->full_description = $reuqest['full_description'];
        }
        if ($reuqest['status']) {

            $development->status = $reuqest['status'];
        }
        if ($reuqest['image']) {

            $development->image = $reuqest['image'];
        }
        $development->save();

        return response()->success(["development" => $development], ["code" => 200, "Text" => "Fraccionamiento agregado correctamente"]);
    }

    public function addLoteTypeToDevelopment($developmentId, Request $reuqest)
    {
        $development = Development::find($developmentId);
        $loteType = LotType::find($reuqest["lote_type_id"]);
        $development->lotTypes()->attach($loteType, ["price" => $reuqest["price"]]);

        return response()->success(["development" => $development], ["code" => 200, "Text" => "Tipo de lote asignado a fraccionamiento correctamente"]);
    }

    public function addPaymentPlanToDevelopment($developmentId, $loteTypeId, Request $reuqest)
    {
        $development = Development::with(['paymentPlans'])->where('id',$developmentId)->get()->first();
        $paymentPlan = PaymentPlan::find($reuqest["payment_plan_id"]);
        $development->paymentPlans()->attach($paymentPlan, ['lot_type_id' => $loteTypeId, 'price_per_sqm' => $reuqest["price_per_sqm"], 'down_payment' => $reuqest["down_payment"]]);
        
        return response()->success(["development" => $development], ["code" => 200, "Text" => "Financiamiento asignado a fraccionamiento correctamente"]);
    }

    public function getAllDevelopments()
    {
        $developments = Development::all(['id', 'name', 'total_land_area', 'total_lots', 'available_lots']);

        return response()->success(["developments" => $developments], 200);
    }

    public function getDevelopmentDetails($id)
    {
        $development = Development::find($id);

        return response()->success(["development" => $development], 200);
    }

    public function getAppointments($developmentId)
    {
        $appointments = Development::where('id', '=', $developmentId)->with('appointments')->get()->first()->appointments;

        return response()->success(['appointments' => $appointments], 200);
    }

    public function getAppointmentDetails($id)
    {
        $appointment = Appointment::find($id);
        return response()->success(['appointment' => $appointment], 200);
    }

    public function createAppointment($developmentId, Request $reuqest)
    {
        $appointment = new Appointment();
        $appointment->customer_name = $reuqest["customer_name"];
        $appointment->customer_phone = $reuqest["customer_phone"];
        if ($reuqest["customer_email"]) {
            $appointment->customer_email = $reuqest["customer_email"];
        }
        $appointment->appointment_date = $reuqest["appointment_date"];
        $appointment->status = 'citado';
        $appointment->notes = $reuqest["notes"];
        $appointment->development_id = $developmentId;
        if ($reuqest["sale_closer_agent_id"]) {
            $appointment->sale_closer_agent_id = $reuqest["sale_closer_agent_id"];
        }
        if ($reuqest["lead_agent_id"]) {
            $appointment->lead_agent_id = $reuqest["lead_agent_id"];
        }
        $appointment->save();
    }

    public function createLote($developmentId, Request $reuqest)
    {
        $development = Development::find($developmentId);
        $loteType = LotType::find($reuqest["lote_type_id"]);

        if ($reuqest["isMultiLote"] == 1) {
            $lotes = [];
            $loteNumbers = explode(',', $reuqest["lot_number"]);
            foreach ($loteNumbers as $key => $loteNumber) {
                $lote = new Lot();
                $lote->development()->associate($development);
                $lote->loteType()->associate($loteType);
                $lote->lot_number = $loteNumber;
                $lote->block_number = $reuqest["block_number"];
                $lote->lot_size = $reuqest["lot_size"];
                $lote->save();
                $lotes[] = $lote;
            }
            return response()->success(['lotes' => $lotes], ["code" => 200, "message" => "Lotes agregados correctamente"]);
        } else {
            $lote = new Lot();
            $lote->development()->associate($development);
            $lote->loteType()->associate($loteType);
            $lote->lot_number = $reuqest["lot_number"];
            $lote->block_number = $reuqest["block_number"];
            $lote->lot_size = $reuqest["lot_size"];
            $lote->save();
            return response()->success(['lote' => $lote], ["code" => 200, "message" => "Lote agregado correctamente"]);
        }
    }

    public function getLotes($developmentId)
    {
        $lotes = Development::find($developmentId)->lotes;
        return response()->success(['lotes' => $lotes], ["code" => 200, "message" => "Listado de lotes"]);
    }

    public function getLoteDetails($id)
    {
        $lote = Lot::find($id);
        return response()->success(["Lote" => $lote], 200);
    }

    public function getPriceByLote($id, Request $reuqest)
    {
        $lote = Lot::find($id);
        if ($lote) {

            if ($reuqest->query("payment_plan")) {
                $reuqest->query("payment_plan");
                $paymentSelected = $lote->development->lotTypes->where("id", "=", $lote->lot_type_id)->first()->paymentPlans->where('id', '=', $reuqest->query("payment_plan"))->first();
            }
            if ($reuqest->query("down_payment")) {
                $downPayment = $reuqest->query("down_payment") >= $paymentSelected->pivot->down_payment ? $reuqest->query("down_payment") : $paymentSelected->pivot->down_payment;
                $total_financing = ($paymentSelected->pivot->price_per_sqm * $lote->lot_size) - $downPayment;
            }
            $mensualidades = $total_financing / $paymentSelected->financing_months;
            $anualidad = 0;
            if ($reuqest->query("annuity")) {
                $reuqest->query("annuity");
                $mensualidades = $mensualidades - ($reuqest->query("annuity") / 12);
                $anualidad = $reuqest->query("annuity");
            } else if ($reuqest->query("mensualidad")) {
                $anualidad = ($mensualidades - $reuqest->query("mensualidad")) * 12;
                $mensualidades = $reuqest->query("mensualidad");
            }
            $priceInfo["down_payment"] = $downPayment;
            $priceInfo["payment_plan"] = $paymentSelected->description;
            $priceInfo["total_financing"] = $total_financing;
            $priceInfo["mensualidades"] = $mensualidades;
            $priceInfo["anualidad"] = $anualidad;
            return response()->success(["price_info" => $priceInfo], 200);
        }
        return response()->failure("Lote no encontrado", 1000);
    }

    public function addLoteMetadata($loteId,Request $request) {
        $development = Lot::find($loteId);
        $development->metadata()->save(new Metadata(["key" => $request["key"],"value"=>$request["value"]]));
        $development->save();
        return response()->success(['metadata' => $development->metadata], ["code" => 200, "message" => "metadato agregado correctamente"]);
    }
}
