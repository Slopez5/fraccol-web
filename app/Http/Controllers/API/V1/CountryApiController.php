<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CountryApiController extends Controller
{
    //
    public function createCountry(Request $request)
    {
        $country = new Country([
            "name" => $request["name"],
            "code" => $request["code"],
        ]);
        $country->save();
        return response()->success(["country" => $country], ["code" => 200, "message" => "Pais agregado correctamente"]);
    }

    public function createState($countryId, Request $request)
    {
        $state = new State([
            "country_id" => $countryId,
            "name" => $request["name"],
            "abbreviation" => $request["abbreviation"],
        ]);
        $state->save();
        return response()->success(["state" => $state], ["code" => 200, "message" => "Estado agregado correctamente"]);
    }

    public function createCity($stateId, Request $request)
    {
        $city = new City([
            "state_id" => $stateId,
            "name" => $request["name"]
        ]);
        $city->save();
        return response()->success(["city" => $city], ["code" => 200, "message" => "Ciudad agregada correctamente"]);
    }
}
