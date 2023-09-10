<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DevelopmentManagerRealEstateController extends Controller
{
    //
    function index()
    {
        return view('real_estates.developmentManager.index');
    }

    function create()
    {
    }

    function store(Request $request)
    {
        logger($request);
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
