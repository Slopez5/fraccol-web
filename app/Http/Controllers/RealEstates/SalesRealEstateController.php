<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SalesRealEstateController extends Controller
{
    //
    function index()
    {
        //Todo validar ventas de la inmobiliaria
        $sales = Sale::all();
        return view('real_estates.sales.index',["sales"=>$sales]);
    }

    function create()
    {
        return view('real_estates.sales.create');
    }

    function store(Request $request)
    {
    }

    function edit($id)
    {
    }

    function update($id, Request $request)
    {
        
    }

    function destroy($id)
    {
    }
}
