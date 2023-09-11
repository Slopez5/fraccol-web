<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevelopmentsRealEstateController extends Controller
{
    //
    function index()
    {
        $developments = Auth::user()->realEstates[0]->developments;
        return view('real_estates.developments.index', ["developments" => $developments]);
    }

    function create()
    {
        return view('real_estates.developments.create');
    }

    function store(Request $request)
    {
        $development = new Development([
            "name" => $request->name,
            "location" => $request->location,
            "total_land_area" => $request->totalLand,
            "total_lots" => $request->totalLots,
            "available_lots" => $request->availableLots,
            "sort_description" => $request->description,
            "full_description" => $request->fullDescription
        ]);
        $development->save();
        $name = "development_" . $development->id;
        $request->file('blueprint')->storeAs('planos/', $name . '.pdf', 'public');
    }

    function edit($id)
    {
        $development = Development::find($id);
        return view('real_estates.developments.edit', ["development" => $development]);
    }

    function update($id, Request $request)
    {
        $development = Development::find($id);
        $development->name = $request->name;
        $development->location = $request->location;
        $development->total_land_area = $request->totalLand;
        $development->total_lots = $request->totalLots;
        $development->available_lots = $request->availableLots;
        $development->sort_description = $request->description;
        $development->full_description = $request->fullDescription;
        if ($request->hasFile('blueprint')) {
            $name = "development_" . $development->id;
            $request->file('blueprint')->storeAs('planos/', $name . '.pdf', 'public');
        }
        $development->save();
        logger($request);
    }

    function destroy($id)
    {
        return redirect()->route('realEstate.developments.index');
    }
}
