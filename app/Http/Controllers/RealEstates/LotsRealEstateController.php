<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;

class LotsRealEstateController extends Controller
{
    //

    function index($id) {
        $development = Development::find($id);
        return view('real_estates.developments.lots.index',["development"=> $development]);
    }

    function create($id) {
        $lot_types = Development::find($id)->lotTypes;
        return view('real_estates.developments.lots.create',["lot_types"=>$lot_types]);
    }
}
