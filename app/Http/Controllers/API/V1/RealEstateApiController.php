<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\RealEstateAgency;
use App\Models\RealEstateBranch;
use App\Models\User;
use Illuminate\Http\Request;

class RealEstateApiController extends Controller
{
    //
    public function addRealEstate(Request $request)
    {
        $user = User::find($request["id"]);
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

    public function addRealEstateAgency($real_estate_id,Request $request) {
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
}
