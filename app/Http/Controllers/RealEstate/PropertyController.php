<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Property

    public function createProperty()
    {
        return view('realEstates.properties.create');
    }

    public function storeProperty(Request $request)
    {
        return redirect()->route('realEstate.properties');
    }

    public function editProperty($id)
    {
        return view('realEstates.properties.edit');
    }

    public function updateProperty(Request $request, $id)
    {
        return redirect()->route('realEstate.properties');
    }

    public function deleteProperty($id)
    {
        return redirect()->route('realEstate.properties');
    }

    public function showProperty($id)
    {
        return view('realEstates.properties.show');
    }
}
