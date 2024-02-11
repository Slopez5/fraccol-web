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
}
