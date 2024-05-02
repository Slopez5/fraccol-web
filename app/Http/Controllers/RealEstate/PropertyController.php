<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Development;
use App\Models\Lot;
use App\Models\Unit;
use App\Models\UnitImage;
use App\Models\UnitType;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class PropertyController extends Controller
{
    // Property

    public function createProperty()
    {
        $developments = Development::all();
        $lots = Lot::all();
        $unitTypes = UnitType::all();
        $propertyTypes = UnitType::all();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('realEstates.properties.create', compact('developments', 'unitTypes', 'lots', 'propertyTypes', 'countries', 'states', 'cities'));
    }

    public function storeProperty(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'address_id' => 'required|integer',
            'development_id' => 'required|integer',
            'lot_id' => 'required|integer',
        ]);
        $property = new Unit();
        $property->name = $request->name;
        $property->description = $request->description;
        //proces array images 

        if ($request->address_id) {
            $property->address_id = $request->address_id;
        }
        if ($request->development_id) {
            $property->development_id = $request->development_id;
        }
        if ($request->lot_id) {
            $property->lot_id = $request->lot_id;
        }
        if ($request->images) {
            foreach ($request->images as $image) {
                $unitImage = new UnitImage();
                $unitImage->unit_id = $property->id;
                $unitImage->title = $request->title;
                $unitImage->description = $request->description;


                //storage in public folder
                $imageName = time() . '.' . $image->extension();
                $imageFile = $image->storeAs('public/properties/' . $property->id, $imageName);
                $storagePath = str_replace('public', 'storage', $imageFile);
                $unitImage->image_url = $storagePath;

            }
           // $property->images = json_encode($images);
        }
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
