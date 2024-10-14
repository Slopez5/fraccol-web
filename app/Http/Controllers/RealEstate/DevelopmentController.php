<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\Development;
use App\Models\DevelopmentType;
use App\Models\Lote;
use App\Models\LoteType;
use App\Models\PaymentPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevelopmentController extends Controller
{
    // Development

    public function createDevelopment()
    {
        $realEstateBranches = Auth::user()->realEstates->first()->branches;
        $developmentTypes = DevelopmentType::all();
        return view('realEstates.developments.create', compact('realEstateBranches', 'developmentTypes'));
    }

    public function storeDevelopment(Request $request)
    {
        $request->validate([
            'real_estate_branch_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'total_land_area' => 'required',
            'total_lotes' => 'required',
            'available_lotes' => 'required',
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
        if ($request->hasFile('blueprint')){
            if ($request->file('blueprint')->isValid()) {
                $blueprint = $request->file('blueprint');
                $storagePath = $blueprint->storeAs('public/developments/blueprints', $blueprint->getClientOriginalName());
                $storagePath = str_replace('public/', 'storage/', $storagePath);
                $development->blueprint = $storagePath;
            }
        }
        $development->location = $request->get('location');
        $development->total_land_area = $request->get('total_land_area');
        $development->total_lotes = $request->get('total_lotes');
        $development->available_lotes = $request->get('available_lotes');
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
        $development->development_type_id = $request->get('development_type_id');
        $development->save();
        return redirect()->route('realEstate.developments');
    }

    public function editDevelopment($id)
    {
        $development = Development::find($id);
        $realEstateBranches = Auth::user()->realEstates->first()->branches;
        $developmentTypes = DevelopmentType::all();
        return view('realEstates.developments.edit', compact('development', 'realEstateBranches', 'developmentTypes'));
    }

    public function updateDevelopment(Request $request, $id)
    {
        $request->validate([
            'real_estate_branch_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'total_land_area' => 'required',
            'total_lotes' => 'required',
            'available_lotes' => 'required',
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
        $development->total_lotes = $request->get('total_lotes');
        $development->available_lotes = $request->get('available_lotes');
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
        $development->development_type_id = $request->get('development_type_id');
        $development->save();

        return redirect()->route('realEstate.developments');
    }

    public function deleteDevelopment($id)
    {
        $development = Development::find($id);
        $development->status = 'deleted';
        $development->save();
        return redirect()->route('realEstate.developments');
    }

    public function restoreDevelopment($id)
    {
        $development = Development::withTrashed()->find($id);
        $development->restore();
        return redirect()->route('realEstate.developments');
    }

    public function showDevelopment($id)
    {
        $development = Development::find($id);
        $development->lotes = $development->lotes->map(function ($lote) {
            $loteType = $lote->development->loteTypes->where('id', $lote->lote_type_id)->first();
            $lote->price = $loteType->pivot->price * $lote->lote_size;
            $lote->paymentPlans = $loteType->paymentPlans->map(function ($paymentPlan) use ($lote) {
                $paymentPlan->price = $paymentPlan->pivot->price_per_sqm * $lote->lote_size;
                $paymentPlan->down_payment = $paymentPlan->pivot->down_payment;
                unset($paymentPlan->pivot);
                return $paymentPlan;
            });
            unset($lote->development);
            return $lote;
        })->sortBy(function ($lote) {
            return [$lote->block_number, $lote->lote_number];
        }, SORT_ASC);
        
        $development->metadata = [];
        $development->paymentPlans = $development->paymentPlans->map(function ($paymentPlan) {
            $paymentPlan->pivot->loteType;
            return $paymentPlan;
        });
        $loteTypes = $development->loteTypes;
        $lotes = $development->lotes;
        $paymentPlans = $development->paymentPlans;
        return view('realEstates.developments.show', compact('development', 'loteTypes', 'lotes', 'paymentPlans'));
    }

    // Development Map Interactive
    public function mapDevelopment($id) {
        $development = Development::find($id);
        return view('realEstates.developments.map', compact('development'));
    }

    // Development -> Lotes

    public function createDevelopmentLote($developmentId)
    {
        $development = Development::find($developmentId);
        $loteTypes = $development->loteTypes;
        return view('realEstates.developments.lotes.create', compact('development', 'loteTypes'));
    }

    public function storeDevelopmentLote(Request $request, $developmentId)
    {
        $request->validate([
            'lote_type_id' => 'required',
            'lote_number' => 'required',
            'block_number' => 'required',
            'lote_size' => 'required',
            'status' => 'required',
        ]);

        $development = Development::find($developmentId);

        $loteType = LoteType::find($request->get('lote_type_id'));

        if (strpos($request->get('lote_number'), ',') !== false) {
            $lotes = explode(',', $request->get('lote_number'));
            foreach ($lotes as $lot) {
                $lote = new Lote();
                $lote->development_id = $development->id;
                $lote->lote_type_id = $loteType->id;
                $lote->lote_number = $lot;
                $lote->block_number = $request->get('block_number');
                $lote->lote_size = $request->get('lote_size');
                $lote->loteStatus()->associate($request->get('status'));
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
            $lote = new Lote();
            $lote->development_id = $development->id;
            $lote->lote_type_id = $loteType->id;
            $lote->lote_number = $request->get('lote_number');
            $lote->block_number = $request->get('block_number');
            $lote->lote_size = $request->get('lote_size');
            $lote->loteStatus()->associate($request->get('status'));
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

    public function editDevelopmentLote($developmentId, $id)
    {
        $development = Development::find($developmentId);
        $loteTypes = $development->loteTypes;
        $lote = Lote::find($id);
        return view('realEstates.developments.lotes.edit', compact('development', 'loteTypes', 'lote'));
    }

    public function updateDevelopmentLote(Request $request, $developmentId, $id)
    {
        $lote = Lote::find($id);
        $lote->lote_number = $request->get('lote_number');
        $lote->block_number = $request->get('block_number');
        $lote->lote_size = $request->get('lote_size');
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
        $lote->save();
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    public function deleteDevelopmentLote($developmentId, $id)
    {
        $lote = Lote::find($id);
        $lote->delete();
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    public function showDevelopmentLote($developmentId, $id)
    {
        return view('realEstates.developments.lotes.show');
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
        $loteTypes = LoteType::all();

        return view('realEstates.developments.loteTypes.create', compact('development', 'loteTypes'));
    }

    public function storeDevelopmentLoteType(Request $request, $developmentId)
    {
        $development = Development::find($developmentId);
        $loteType = LoteType::find($request->get('lote_type_id'));
        $development->loteTypes()->attach($loteType, [
            'price' => $request->get('price'),
        ]);
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    public function deleteDevelopmentLoteType($developmentId, $id)
    {
        return redirect()->route('realEstate.development.show', $developmentId);
    }

    public function showDevelopmentLoteType($developmentId, $id)
    {
        return view('realEstates.developments.loteTypes.show');
    }

    // Development -> lote types -> payment plans

    public function createDevelopmentLoteTypePaymentPlan($developmentId)
    {
        $development = Development::find($developmentId);
        $loteTypes = $development->loteTypes;
        $paymentPlans = PaymentPlan::all();
        return view('realEstates.developments.paymentPlans.create', compact('development', 'paymentPlans', 'loteTypes'));
    }

    public function storeDevelopmentLoteTypePaymentPlan(Request $request, $developmentId)
    {
        $development = Development::find($developmentId);
        $loteType = LoteType::find($request->get('lote_type_id'));
        $paymentPlan = PaymentPlan::find($request->get('payment_plan_id'));
        $development->paymentPlans()->attach($paymentPlan, [
            'lote_type_id' => $loteType->id,
            'down_payment' => $request->get('down_payment'),
            'price_per_sqm' => $request->get('price'),
        ]);
        return redirect()->route('realEstate.development.show', [$developmentId]);
    }


    public function deleteDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function showDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId)
    {
        return view('realEstates.developments.paymentPlans.show');
    }
}
