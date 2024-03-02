<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\LotType;
use Illuminate\Http\Request;

class LoteApiController extends Controller
{
    //

    public function addLoteType(Request $request)
    {
        $loteType = new LotType();
        $loteType->name = $request["name"];
        $loteType->description = $request["description"];
        $loteType->save();
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote agregado correctamente"]);
    }

    public function getLoteTypes(){
        $loteTypes = LotType::all();
        return response()->success(['lote_types' => $loteTypes], ["code" => 200, "message" => "tipos de lote"]);
    }

    public function LoteTypeDetails($id){
        $loteType = LotType::find($id);
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote"]);
    }

    public function updateLoteType($id, Request $request){
        $loteType = LotType::find($id);
        $loteType->name = $request["name"];
        $loteType->description = $request["description"];
        $loteType->save();
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote actualizado correctamente"]);
    }

    public function deleteLoteType($id){
        $loteType = LotType::find($id);
        $loteType->delete();
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote eliminadoo correctamente"]);
    }
}
