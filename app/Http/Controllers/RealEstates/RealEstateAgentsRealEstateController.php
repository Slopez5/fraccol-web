<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RealEstateAgentsRealEstateController extends Controller
{
    //
    function index()
    {
        return view('real_estates.realEstateAgent.index');
    }

    function create()
    {
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
