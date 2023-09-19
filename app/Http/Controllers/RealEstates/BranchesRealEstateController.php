<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\RealEstateBranch;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchesRealEstateController extends Controller
{
    //
    function index()
    {
        $branches = Auth::user()->realEstates[0]->branches;
        return view('real_estates.branches.index', ["branches" => $branches]);
    }

    function create()
    {
        
        $states = State::all();
        return view('real_estates.branches.create', ["states" => $states]);
    }

    function store(Request $request)
    {
        $branch = new RealEstateBranch();
        $branch->real_estate_agency_id = Auth::user()->realEstates[0]->id;
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->phone = $request->telephone;
        $address = new Address();
        $address->street = $request->street;
        $address->state_id = $request->state;
        $address->city_id = $request->city;
        $address->zip_code = $request->zipCode;
        $address->save();
        $branch->address()->associate($address);
        $branch->save();
        return redirect()->route('realEstate.branches.index');
    }

    function edit($id)
    {
        $branch = RealEstateBranch::find($id);
        $states = State::all();
        return view('real_estates.branches.edit', ["branch" => $branch, "states" => $states]);
    }

    function update($id, Request $request)
    {
        $branch = RealEstateBranch::find($id);
        $branch->real_estate_agency_id = Auth::user()->realEstates[0]->id;
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->phone = $request->telephone;
        $address = new Address();
        $address->street = $request->street;
        $address->state_id = $request->state;
        $address->city_id = $request->city;
        $address->zip_code = $request->zipCode;
        $address->save();
        $branch->address()->associate($address);
        $branch->save();
        return redirect()->route('realEstate.branches.index');
    }

    function destroy($id)
    {
        RealEstateBranch::find($id)->delete();
        return redirect()->route('realEstate.branches.index');
    }
}
