<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\LoteType;
use Illuminate\Http\Request;

class LoteApiController extends Controller
{
    //

    public function addLoteType(Request $request)
    {
        $loteType = new LoteType();
        $loteType->name = $request["name"];
        $loteType->description = $request["description"];
        $loteType->save();
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote agregado correctamente"]);
    }

    public function getLoteTypes(){
        $loteTypes = LoteType::all();
        return response()->success(['lote_types' => $loteTypes], ["code" => 200, "message" => "tipos de lote"]);
    }

    public function LoteTypeDetails($id){
        $loteType = LoteType::find($id);
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote"]);
    }

    public function updateLoteType($id, Request $request){
        $loteType = LoteType::find($id);
        $loteType->name = $request["name"];
        $loteType->description = $request["description"];
        $loteType->save();
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote actualizado correctamente"]);
    }

    public function deleteLoteType($id){
        $loteType = LoteType::find($id);
        $loteType->delete();
        return response()->success(['lote_type' => $loteType], ["code" => 200, "message" => "tipo de lote eliminadoo correctamente"]);
    }
}
