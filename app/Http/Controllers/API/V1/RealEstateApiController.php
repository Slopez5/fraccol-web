<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\RealEstateAgency;
use App\Models\RealEstateBranch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealEstateApiController extends Controller
{
    //
    public function addRealEstate(Request $request)
    {
        $user = Auth::user();
        if ($user->role->id == 2) {
            $real_estate_agency = new RealEstateAgency();
            $real_estate_agency->admin()->associate($user);
            $real_estate_agency->name = $request["name"];
            $real_estate_agency->email = $request["email"];
            $real_estate_agency->phone = $request["phone"];
            $real_estate_agency->website = $request["website"];
            $real_estate_agency->save();
            return response()->success(["real_estate_agency" => $real_estate_agency], ["code" => 200, "Text" => "agencia agregada correctamente"]);
        } else {
            return response()->failure(["message" => "Usuario invalido"], ["code" => 1000]);
        }
    }

    public function addRealEstateBranch($real_estate_id, Request $request)
    {
        $real_estate_agency = RealEstateAgency::find($real_estate_id);
        $real_estate_branch = new RealEstateBranch();
        $real_estate_branch->name = $request["name"];
        $real_estate_branch->email = $request["email"];
        $real_estate_branch->phone = $request["phone"];
        $real_estate_branch->realEstate()->associate($real_estate_agency);
        $address = new Address([
            "street" => $request["address"]["street"],
            "neighborhood" => $request["address"]["neighborhood"],
            "country_id" => $request["address"]["country_id"],
            "state_id" => $request["address"]["state_id"],
            "city_id" => $request["address"]["city_id"],
            "zip_code" => $request["address"]["zip_code"]
        ]);
        $address->save();
        $real_estate_branch->address()->associate($address);
        $real_estate_branch->save();
        return response()->success(["real_estate_branch" => $real_estate_branch], ["code" => 200, "Text" => "sucursal agregada correctamente"]);
    }


    public function getRealEstates()
    {
        $real_estate_agencies = RealEstateAgency::with(['branches'])->get();
        return response()->success(["real_estate_agencies" => $real_estate_agencies], ["code" => 200, "Text" => ""]);
    }

    public function realEstateDetails($id)
    {
        $real_estate_agency = RealEstateAgency::find($id);

        return response()->success(["real_estate_agency" => $real_estate_agency], ["code" => 200, "Text" => ""]);
    }

    public function updateRealEstate($id, Request $request)
    {
        $real_estate_agency = RealEstateAgency::find($id);
        $real_estate_agency->name = $request["name"];
        $real_estate_agency->email = $request["email"];
        $real_estate_agency->phone = $request["phone"];
        $real_estate_agency->website = $request["website"];
        $real_estate_agency->save();
        return response()->success(["real_estate_agency" => $real_estate_agency], ["code" => 200, "Text" => ""]);
    }

    public function deleteRealEstate($id)
    {
        $real_estate_agency = RealEstateAgency::find($id);
        $real_estate_agency->delete();
        return response()->success(["real_estate_agency" => $real_estate_agency], ["code" => 200, "Text" => ""]);
    }

    public function getRealEstateBranches($realEstateId)
    {
        $real_estate_branches = RealEstateAgency::find($realEstateId)->branches;
        return response()->success(["real_estate_branches" => $real_estate_branches], ["code" => 200, "Text" => ""]);
    }

    public function realEstateBranchDetails($id)
    {
        $real_estate_branch = RealEstateBranch::find($id);
        return response()->success(["real_estate_branch" => $real_estate_branch], ["code" => 200, "Text" => ""]);
    }

    public function updateRealEstateBranch($id, Request $request)
    {
        $real_estate_branch = RealEstateBranch::find($id);
        $real_estate_branch->name = $request["name"];
        $real_estate_branch->email = $request["email"];
        $real_estate_branch->phone = $request["phone"];
        return response()->success(["real_estate_branch" => $real_estate_branch], ["code" => 200, "Text" => ""]);
    }

    public function updateAddressRealEstateBranch($id, Request $request)
    {
        $real_estate_branch = RealEstateBranch::find($id);
        $address = Address::find($real_estate_branch->address_id);
        $address->street = $request["street"];
        $address->neighborhood = $request["neighborhood"];
        $address->country_id = $request["country_id"];
        $address->state_id = $request["state_id"];
        $address->city_id = $request["city_id"];
        $address->zip_code = $request["zip_code"];
        return response()->success(["address" => $address], ["code" => 200, "Text" => ""]);
    }

    public function deleteRealEstateBranch($id)
    {
        $real_estate_branch = RealEstateBranch::find($id);
        $real_estate_branch->delete();
        return response()->success(["real_estate_branch" => $real_estate_branch], ["code" => 200, "Text" => ""]);
    }
}
