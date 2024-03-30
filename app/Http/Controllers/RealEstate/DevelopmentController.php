<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\Development;
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
            $development->logo = $request->file('logo')->store('developments');
        }
        if ($request->file('blueprint')->isValid()) {
            $blueprint = $request->file('blueprint');
            $storagePath = $blueprint->storeAs('public/developments/blueprints', $blueprint->getClientOriginalName());
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
        if ($request->get('image')) {
            $development->image = $request->get('image');
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
            $development->logo = $request->file('logo')->store('developments');
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
        if ($request->get('image')) {
            $development->image = $request->get('image');
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
        return view('realEstates.developments.show');
    }

    public function developmentLots($id)
    {
        return view('realEstates.developments.lots.index');
    }

    public function developmentMetadata($id)
    {
        return view('realEstates.developments.metadata.index');
    }

    public function developmentLoteTypes($id)
    {
        return view('realEstates.developments.loteTypes.index');
    }

    public function developmentLoteTypePaymentPlans($developmentId, $loteTypeId)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.index');
    }

    // Development -> Lotes

    public function createDevelopmentLot($developmentId)
    {
        return view('realEstates.developments.lots.create');
    }

    public function storeDevelopmentLot(Request $request, $developmentId)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
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
        return view('realEstates.developments.loteTypes.create');
    }

    public function storeDevelopmentLoteType(Request $request, $developmentId)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function editDevelopmentLoteType($developmentId, $id)
    {
        return view('realEstates.developments.loteTypes.edit');
    }

    public function updateDevelopmentLoteType(Request $request, $developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function deleteDevelopmentLoteType($developmentId, $id)
    {
        return redirect()->route('realEstate.developments.show', $developmentId);
    }

    public function showDevelopmentLoteType($developmentId, $id)
    {
        return view('realEstates.developments.loteTypes.show');
    }

    // Development -> lote types -> payment plans

    public function createDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.create');
    }

    public function storeDevelopmentLoteTypePaymentPlan(Request $request, $developmentId, $loteTypeId)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function editDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId, $id)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.edit');
    }

    public function updateDevelopmentLoteTypePaymentPlan(Request $request, $developmentId, $loteTypeId, $id)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function deleteDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId, $id)
    {
        return redirect()->route('realEstate.developments.loteTypes.show', [$developmentId, $loteTypeId]);
    }

    public function showDevelopmentLoteTypePaymentPlan($developmentId, $loteTypeId, $id)
    {
        return view('realEstates.developments.loteTypes.paymentPlans.show');
    }
}
