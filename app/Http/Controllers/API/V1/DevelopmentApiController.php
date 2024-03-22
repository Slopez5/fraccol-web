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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use PhpParser\Builder\Function_;

class DevelopmentApiController extends Controller
{

    public function createDevelopment(Request $request)
    {
        $development = new Development();
        $development->real_estate_id = $request['real_estate_id'];
        $development->real_estate_branch_id = $request['real_estate_branch_id'];
        $development->name = $request["name"];
        if ($request['logo']) {
            $development->logo = $request['logo'];
        }
        if ($request['blueprint']) {
            $development->blueprint = $request['blueprint'];
        }
        if ($request['location']) {
            $development->location = $request['location'];
        }
        if ($request['total_land_area']) {
            $development->total_land_area = $request['total_land_area'];
        }
        $development->total_lots = $request['total_lots'];
        $development->available_lots = $request['available_lots'];
        if ($request['start_date']) {

            $development->start_date = $request['start_date'];
        }
        if ($request['end_date']) {

            $development->end_date = $request['end_date'];
        }
        if ($request['sort_description']) {

            $development->sort_description = $request['sort_description'];
        }
        if ($request['full_description']) {

            $development->full_description = $request['full_description'];
        }
        if ($request['status']) {

            $development->status = $request['status'];
        }
        if ($request['image']) {

            $development->image = $request['image'];
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
        $development = Development::with(['paymentPlans'])->where('id', $developmentId)->get()->first();
        $paymentPlan = PaymentPlan::find($reuqest["payment_plan_id"]);
        $development->paymentPlans()->attach($paymentPlan, ['lot_type_id' => $loteTypeId, 'price_per_sqm' => $reuqest["price_per_sqm"], 'down_payment' => $reuqest["down_payment"]]);

        return response()->success(["development" => $development], ["code" => 200, "Text" => "Financiamiento asignado a fraccionamiento correctamente"]);
    }

    public function getAllDevelopments()
    {
        $developments = Development::all();
        return response()->success(["developments" => $developments], 200);
    }

    public function getDevelopmentDetails($id)
    {
        $development = Development::with(['realEstatesAgency', 'realEstatesBranch', 'lotTypes', 'paymentPlans', 'lotes'])->where('id', $id)->get()->first();
        $development->lotTypes->map(function ($lotType) {
            $lotType->price = $lotType->pivot->price;
            unset($lotType->pivot);
            return $lotType;
        });

        $development->paymentPlans->map(function ($paymentPlan) {
            $paymentPlan->price = $paymentPlan->pivot->price_per_sqm;
            $paymentPlan->down_payment = $paymentPlan->pivot->down_payment;
            unset($paymentPlan->pivot);
            return $paymentPlan;
        });

        return response()->success(["development" => $development], 200);
    }

    public function updateDevelopment($id, Request $request)
    {
        $development = Development::find($id);
        $development->name = $request["name"];
        if ($request['logo']) {
            $development->logo = $request['logo'];
        }
        if ($request['blueprint']) {
            $path = null;
            if ($request->file('blueprint')->isValid()) {
                $path = $request->file('blueprint')->storeAs('public/planos', $request["name"]);
                $path = str_replace('public/', 'storage/', $path);
            }

            $development->blueprint = $path;
        }
        if ($request['location']) {
            $development->location = $request['location'];
        }
        if ($request['total_land_area']) {
            $development->total_land_area = $request['total_land_area'];
        }
        $development->total_lots = $request['total_lots'];
        $development->available_lots = $request['available_lots'];
        if ($request['start_date']) {

            $development->start_date = $request['start_date'];
        }
        if ($request['end_date']) {

            $development->end_date = $request['end_date'];
        }
        if ($request['sort_description']) {

            $development->sort_description = $request['sort_description'];
        }
        if ($request['full_description']) {

            $development->full_description = $request['full_description'];
        }
        if ($request['status']) {

            $development->status = $request['status'];
        }
        if ($request['image']) {
            $path = null;
            if ($request->file('image')->isValid()) {
                $path = $request->file('image')->storeAs('public/developments/' . $request["name"], "banner");
                $path = str_replace('public/', 'storage/', $path);
            }

            $development->image = "https://fraccionamientoscolima.com/" . $path;
        }
        $development->save();

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
        return response()->success(['appointment' => $appointment], 200);
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
        $lotes = Development::find($developmentId)->lotes->map(function($lote) {
            $loteType= $lote->loteType->name;
            // unset($lote->loteType);
            // $lote->lote_type = $loteType;
            return $lote;
        });
        return response()->success(['lotes' => $lotes], ["code" => 200, "message" => "Listado de lotes"]);
    }

    public function getLoteDetails($id)
    {
        $lote = Lot::find($id);
        return response()->success(["Lote" => $lote], 200);
    }

    public function getPriceByLote(Request $request)
    {
        $lote = Lot::find($request->query("lote"));
        if ($lote) {
            if ($request->query("payment_plan")) {
                $request->query("payment_plan");
                $paymentSelected = $lote->development->lotTypes->where("id", "=", $lote->lot_type_id)->first()->paymentPlans->where('id', '=', $request->query("payment_plan"))->first();

                if ($request->query("down_payment")) {
                    $downPayment = $request->query("down_payment") >= $paymentSelected->pivot->down_payment ? $request->query("down_payment") : $paymentSelected->pivot->down_payment;
                    $total_financing = ($paymentSelected->pivot->price_per_sqm * $lote->lot_size) - $downPayment;
                    $total_price = ($paymentSelected->pivot->price_per_sqm * $lote->lot_size);
                    $lot_size =  $lote->lot_size;
                    $price_per_sqm = $paymentSelected->pivot->price_per_sqm;
                }
                $mensualidades = $total_financing / $paymentSelected->financing_months;
                $anualidad = 0;
                if ($request->query("annuity")) {
                    $request->query("annuity");
                    $mensualidades = $mensualidades - ($request->query("annuity") / 12);
                    $anualidad = $request->query("annuity");
                } else if ($request->query("mensualidad")) {
                    $anualidad = ($mensualidades - $request->query("mensualidad")) * 12;
                    $mensualidades = $request->query("mensualidad");
                }
                $priceInfo["down_payment"] = $downPayment;
                $priceInfo["payment_plan"] = $paymentSelected->description;
                $priceInfo["total_financing"] = "$" . number_format($total_financing, 2, '.', ',');
                $priceInfo["mensualidades"] = "$" . number_format($mensualidades, 2, '.', ',');
                $priceInfo["anualidad"] = "$" . number_format($anualidad, 2, '.', ',');
                $priceInfo["price_per_sqm"] = "$" . number_format($price_per_sqm, 2, '.', ',');
                $priceInfo["total_price"] = "$" . number_format($total_price, 2, '.', ',');
                $priceInfo["lot_size"] = $lot_size . "m2";
                $anualidadText = $anualidad > 0 ? "anualidades de {$priceInfo["anualidad"]}" : "sin anualidades adicionales";

                $priceInfo["postText"] = "¡Hola! Gracias por tu interés en nuestro lote disponible. El precio total del terreno es de {$priceInfo["total_price"]}. Para ayudarte con la financiación, ofrecemos un pago inicial de {$priceInfo["down_payment"]} y un plan de {$priceInfo["payment_plan"]}. Esto significa que el total a financiar es de {$priceInfo["total_financing"]}, con mensualidades de {$priceInfo["mensualidades"]} y {$anualidadText}. El precio por metro cuadrado es de {$priceInfo["price_per_sqm"]} y el tamaño del lote es de {$priceInfo["lot_size"]}. ¡No dudes en contactarnos si necesitas más información o deseas proceder con la compra!";
            } else {
                $price_per_sqm = $lote->development->lotTypes->where("id", "=", $lote->lot_type_id)->first()->pivot->price;
                $lot_size = $lote->lot_size;
                $total_price = $price_per_sqm * $lot_size;

                $priceInfo["price_per_sqm"] = "$" . number_format($price_per_sqm, 2, '.', ',');
                $priceInfo["total_price"] = "$" . number_format($total_price, 2, '.', ',');
                $priceInfo["lot_size"] = $lot_size . "m2";

                $priceInfo["postText"] = "¡Hola! Gracias por tu interés en nuestro lote disponible. El precio total del terreno es de {$priceInfo["total_price"]}. El precio por metro cuadrado es de {$priceInfo["price_per_sqm"]} y el tamaño del lote es de {$priceInfo["lot_size"]}. ¡No dudes en contactarnos si necesitas más información o deseas proceder con la compra!";
            }

            return response()->success(["price_info" => $priceInfo], 200);
        }
        return response()->failure("Lote no encontrado", 1000);
    }

    public function addLoteMetadata($loteId, Request $request)
    {
        $development = Lot::find($loteId);
        $development->metadata()->save(new Metadata(["key" => $request["key"], "value" => $request["value"]]));
        $development->save();
        return response()->success(['metadata' => $development->metadata], ["code" => 200, "message" => "metadato agregado correctamente"]);
    }

    public function getLoteTypeByDevelopment($developmentId)
    {
        $lote_types = Development::find($developmentId)->lotTypes->map(function ($loteType) {
            $loteType->price = $loteType->pivot->price;
            unset($loteType->pivot);
            return $loteType;
        });
        return response()->success(['lote_types' => $lote_types], ["code" => 200, "message" => "Listado de tipos de lote de un fraccionamiento "]);
    }

    public function getPaymentPlansByDevelopment($developmentId)
    {
        $payment_plans = Development::find($developmentId)->lotTypes->map(function ($development) {
            return $development->paymentPlans->map(function ($paymentPlan) {
                $paymentPlan->price = $paymentPlan->pivot->price_per_sqm;
                $paymentPlan->down_payment = $paymentPlan->pivot->down_payment;
                unset($paymentPlan->pivot);
                return $paymentPlan;
            });
        })->first();


        return response()->success(['payment_plans' => $payment_plans], ["code" => 200, "message" => "Listado de financiamientos de un fraccionamiento "]);
    }
}
