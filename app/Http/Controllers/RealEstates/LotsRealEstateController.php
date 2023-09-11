<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\Development;
use App\Models\Lot;
use Illuminate\Http\Request;

class LotsRealEstateController extends Controller
{
    //

    function index($id)
    {
        $development = Development::find($id);
        return view('real_estates.developments.lots.index', ["development" => $development]);
    }

    function create($id)
    {
        $development = Development::find($id);
        return view('real_estates.developments.lots.create', ["development" => $development]);
    }

    function store($id, Request $request)
    {
        $development = Development::find($id);
        $lote = new Lot([
            "lot_type_id" => $request->loteType,
            "lot_number" => $request->lote,
            "block_number" => $request->block,
            "lot_size" => $request->lotSize,
        ]);
        $development->lotes()->save($lote);
        return redirect()->route('realEstate.development.lot.create',[$id]);
    }

    function edit($id, $lote_id)
    {
        $development = Development::find($id);
        $lote = Lot::find($lote_id);
        return view('real_estates.developments.lots.edit', ["development" => $development, "lote" => $lote]);
    }

    function update($id, $lote_id, Request $request)
    {
        $lote = Lot::find($lote_id);
        $lote->lot_type_id = $request->loteType;
        $lote->lot_number = $request->lote;
        $lote->block_number = $request->block;
        $lote->lot_size = $request->lotSize;
        $lote->save();
        return redirect()->route('realEstate.development.lots.index',[$id]);
    }

    function destroy($id, $lote_id)
    {
        Lot::find($lote_id)->delete();
        return redirect()->route('realEstate.development.lots.index',[$id]);
    }
}
