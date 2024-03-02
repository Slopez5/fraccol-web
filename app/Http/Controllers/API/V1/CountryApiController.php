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
    public function getCountries()
    {
        $countries = Country::all();
        return response()->success(["countries" => $countries], ["code" => 200, "message" => "Listado de paises registrados"]);
    }

    public function createCountry(Request $request)
    {
        $country = new Country([
            "name" => $request["name"],
            "code" => $request["code"],
        ]);
        $country->save();
        return response()->success(["country" => $country], ["code" => 200, "message" => "Pais agregado correctamente"]);
    }

    public function countryDetails($id)
    {
        $country = Country::find($id);
        return response()->success(["country" => $country], ["code" => 200, "message" => "Detalles de pais"]);
    }

    public function updateCountry($id,Request $request)
    {
        $country = Country::find($id);
        $country->name = $request["name"];
        $country->code = $request["code"];
        $country->save();
        return response()->success(["country" => $country], ["code" => 200, "message" => "Pais actualizado correctamente"]);
    }

    public function deleteCountry($id) {
        $country = Country::find($id);
        $country->delete();
        return response()->success(["country" => $country], ["code" => 200, "message" => "Pais eliminado correctamente"]);
    }

    public function getStates($countryId)
    {
        $states = Country::find($countryId)->states;
        return response()->success(["states" => $states], ["code" => 200, "message" => "Listado de estados registrados"]);
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

    public function stateDetails($id)
    {
        $state = State::find($id);
        return response()->success(["state" => $state], ["code" => 200, "message" => "Detalles de estado"]);
    }

    public function updateState($id,Request $request)
    {
        $state = State::find($id);
        $state->name = $request["name"];
        $state->abbreviation = $request["abbreviation"];
        $state->save();
        return response()->success(["state" => $state], ["code" => 200, "message" => "Estado actualizado correctamente"]);
    }

    public function deleteState($id) {
        $state = State::find($id);
        $state->delete();
        return response()->success(["state" => $state], ["code" => 200, "message" => "Estado eliminado correctamente"]);
    }

    public function getCities($stateId)
    {
        $cities = State::find($stateId)->cities;
        return response()->success(["cities" => $cities], ["code" => 200, "message" => "Listado de ciudades registrados"]);
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

    public function cityDetails($id)
    {
        $city = City::find($id);
        return response()->success(["city" => $city], ["code" => 200, "message" => "Detalles de ciudad"]);
    }

    public function updateCity($id,Request $request)
    {
        $city = City::find($id);
        $city->name = $request["name"];
        $city->save();
        return response()->success(["city" => $city], ["code" => 200, "message" => "Ciudad actualizado correctamente"]);
    }

    public function deleteCity($id) {
        $city = City::find($id);
        $city->delete();
        return response()->success(["city" => $city], ["code" => 200, "message" => "Ciudad eliminado correctamente"]);
    }
}
