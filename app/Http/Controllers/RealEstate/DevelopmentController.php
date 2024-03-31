<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\Development;
use App\Models\Lot;
use App\Models\LotType;
use App\Models\Payment;
use App\Models\PaymentPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevelopmentController extends Controller
{
    // Development

    public function createDevelopment()
    {
        $realEstateBranches = Auth::user()->realEstates->first()->branches;
        return view('realEstates.developments.create', compact('realEstateBranches'));
    }

    public function storeDevelopment(Request $request)
    {
        $request->validate([
            'real_estate_branch_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'total_land_area' => 'required',
            'total_lots' => 'required',
            'available_lots' => 'required',
        ]);

        $development = new Development();
        $development->real_estate_id = Auth::user()->realEstates->first()->id;
        $development->real_estate_branch_id = $request->get('real_estate_branch_id');
        $development->name = $request->get('name');
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $storagePath = $logo->storeAs('public/developments/logos', $logo->getClientOriginalName());
            $storagePath = str_replace('public/', 'storage/', $storagePath);
            $development->logo = $storagePath;
        }
        if ($request->file('blueprint')->isValid()) {
            $blueprint = $request->file('blueprint');
            $storagePath = $blueprint->storeAs('public/developments/blueprints', $blueprint->getClientOriginalName());
            $storagePath = str_replace('public/', 'storage/', $storagePath);
            $development->blueprint = $storagePath;
        }
        $development->location = $request->get('location');
        $development->total_land_area = $request->get('total_land_area');
        $development->total_lots = $request->get('total_lots');
        $development->available_lots = $request->get('available_lots');
        if ($request->get('start_date')) {
            $development->start_date = $request->get('start_date');
        }
        if ($request->get('end_date')) {
            $development->end_date = $request->get('end_date');
        }
        if ($request->get('sort_description')) {
            $development->sort_description = $request->get('sort_description');
        }
        if ($request->get('full_description')) {
            $development->full_description = $request->get('full_description');
        }
        $development->status = 'active';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = $image->storeAs('public/developments/images', $image->getClientOriginalName());
            $storagePath = str_replace('public/', 'storage/', $storagePath);
            $development->image = $storagePath;
        }
        $development->save();
        return redirect()->route('realEstate.developments');
    }

    public function editDevelopment($id)
    {
        $development = Development::find($id);
        $realEstateBranches = Auth::user()->realEstates->first()->branches;
        return view('realEstates.developments.edit', compact('development', 'realEstateBranches'));
    }

    public function updateDevelopment(Request $request, $id)
    {
        $request->validate([
            'real_estate_branch_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'total_land_area' => 'required',
            'total_lots' => 'required',
            'available_lots' => 'required',
        ]);
        $development = Development::find($id);
        $development->real_estate_id = Auth::user()->realEstates->first()->id;
        $development->real_estate_branch_id = $request->get('real_estate_branch_id');
        $development->name = $request->get('name');
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $storagePath = $logo->storeAs('public/developments/logos', $logo->getClientOriginalName());
            $storagePath = str_replace('public/', 'storage/', $storagePath);
            $development->logo = $storagePath;
        }
        if ($request->file('blueprint')->isValid()) {
            $blueprint = $request->file('blueprint');
            $storagePath = $blueprint->storeAs('public/developments/blueprints', $blueprint->getClientOriginalName());
            $storagePath = str_replace('public/', 'storage/', $storagePath);
            $development->blueprint = $storagePath;
        }
        $development->location = $request->get('location');
        $development->total_land_area = $request->get('total_land_area');
        $development->total_lots = $request->get('total_lots');
        $development->available_lots = $request->get('available_lots');
        if ($request->get('start_date')) {
            $development->start_date = $request->get('start_date');
        }
        if ($request->get('end_date')) {
            $development->end_date = $request->get('end_date');
        }
        if ($request->get('sort_description')) {
            $development->sort_description = $request->get('sort_description');
        }
        if ($request->get('full_description')) {
            $development->full_description = $request->get('full_description');
        }
        $development->status = 'active';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = $image->storeAs('public/developments/images', $image->getClientOriginalName());
            $storagePath = str_replace('public/', 'storage/', $storagePath);
            $development->image = $storagePath;
        }
        $development->save();

        return redirect()->route('realEstate.developments');
    }

    public function deleteDevelopment($id)
    {
        return redirect()->route('realEstate.developments');
    }

    public function showDevelopment($id)
    {
        $development = Development::find($id);
        $development->lotes = $development->lotes->map(function ($lote) {
            $loteType = $lote->development->lotTypes->where('id', $lote->lot_type_id)->first();
            $lote->price = $loteType->pivot->price * $lote->lot_size;
            $lote->paymentPlans = $loteType->paymentPlans->map(function ($paymentPlan) use ($lote) {
                $paymentPlan->price = $paymentPlan->pivot->price_per_sqm * $lote->lot_size;
                $paymentPlan->down_payment = $paymentPlan->pivot->down_payment;
                unset($paymentPlan->pivot);
                return $paymentPlan;
            });
            unset($lote->development);
            return $lote;
        })->sortBy(function ($lote) {
            return [$lote->block_number, $lote->lot_number];
        }, SORT_ASC);
        
        $development->metadata = [];
        $development->paymentPlans = $development->paymentPlans->map(function ($paymentPlan) {
            $paymentPlan->pivot->lotType;
            return $paymentPlan;
        });
        return view('realEstates.developments.show', compact('development'));
    }

    // Development -> Lotes

    public function createDevelopmentLot($developmentId)
    {
        $development = Development::find($developmentId);
        $lotTypes = $development->lotTypes;
        return view('realEstates.developments.lots.create', compact('development', 'lotTypes'));
    }

    public function storeDevelopmentLot(Request $request, $developmentId)
    {
        $request->validate([
            'lot_type_id' => 'required',
            'lot_number' => 'required',
            'block_number' => 'required',
            'lot_size' => 'required',
            'status' => 'required',
        ]);

        $development = Development::find($developmentId);

        $lotType = LotType::find($request->get('lot_type_id'));
        if ($request->get('isMultiples') == '1') {
            $lotes = explode(',', $request->get('lot_number'));
            foreach ($lotes as $lot) {
                $lote = new Lot();
                $lote->development_id = $development->id;
                $lote->lot_type_id = $lotType->id;
                $lote->lot_number = $lot;
                $lote->block_number = $request->get('block_number');
                $lote->lot_size = $request->get('lot_size');
                $lote->status = $request->get('status');
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $storagePath = $image->storeAs('public/developments/lotes', $image->getClientOriginalName());
                    $storagePath = str_replace('public/', 'storage/', $storagePath);
                    $lote->image_url = $storagePath;
                }
                if ($request->get('location')) {
                    $lote->location = $request->get('location');
                }
                if ($request->get('description')) {
                    $lote->description = $request->get('description');
                }
                $development->lotes()->save($lote);
            }
        } else {
            $lote = new Lot();
            $lote->development_id = $development->id;
            $lote->lot_type_id = $lotType->id;
            $lote->lot_number = $request->get('lot_number');
            $lote->block_number = $request->get('block_number');
            $lote->lot_size = $request->get('lot_size');
            $lote->status = $request->get('status');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $storagePath = $image->storeAs('public/developments/lotes', $image->getClientOriginalName());
                $storagePath = str_replace('public/', 'storage/', $storagePath);
                $lote->image_url = $storagePath;
            }
            if ($request->get('location')) {
                $lote->location = $request->get('location');
            }
            if ($request->get('description')) {
                $lote->description = $request->get('description');
            }
            $development->lotes()->save($lote);
        }

        $development->save();
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    public function editDevelopmentLot($developmentId, $id)
    {
        return view('realEstates.developments.lots.edit');
    }

    public function updateDevelopmentLot(Request $request, $developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function deleteDevelopmentLot($developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function showDevelopmentLot($developmentId, $id)
    {
        return view('realEstates.developments.lots.show');
    }

    // Development -> metadata

    public function createDevelopmentMetadata($developmentId)
    {
        return view('realEstates.developments.metadata.create');
    }

    public function storeDevelopmentMetadata(Request $request, $developmentId)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function editDevelopmentMetadata($developmentId, $id)
    {
        return view('realEstates.developments.metadata.edit');
    }

    public function updateDevelopmentMetadata(Request $request, $developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function deleteDevelopmentMetadata($developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function showDevelopmentMetadata($developmentId, $id)
    {
        return view('realEstates.developments.metadata.show');
    }

    // Development -> lote types

    public function createDevelopmentLoteType($developmentId)
    {
        $development = Development::find($developmentId);
        $loteTypes = LotType::all();

        return view('realEstates.developments.loteTypes.create', compact('development', 'loteTypes', 'paymentPlans'));
    }

    public function storeDevelopmentLoteType(Request $request, $developmentId)
    {
        $development = Development::find($developmentId);
        $loteType = LotType::find($request->get('lote_type_id'));
        $development->lotTypes()->attach($loteType, [
            'price' => $request->get('price'),
        ]);
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    public function deleteDevelopmentLoteType($developmentId, $id)
    {
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    // Development -> lote types -> payment plans

    public function createDevelopmentLoteTypePaymentPlan($developmentId)
    {
        $development = Development::find($developmentId);
        $loteTypes = $development->lotTypes;
        $paymentPlans = PaymentPlan::all();
        return view('realEstates.developments.paymentPlans.create', compact('development', 'paymentPlans', 'loteTypes'));
    }

    public function storeDevelopmentLoteTypePaymentPlan(Request $request, $developmentId)
    {
        $development = Development::find($developmentId);
        $loteType = LotType::find($request->get('lote_type_id'));
        $paymentPlan = PaymentPlan::find($request->get('payment_plan_id'));
        $development->paymentPlans()->attach($paymentPlan, [
            'lot_type_id' => $loteType->id,
            'down_payment' => $request->get('down_payment'),
            'price_per_sqm' => $request->get('price'),
        ]);
        return redirect()->route('realEstate.development.show', [$developmentId]);
    }


    public function deleteDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }
}
