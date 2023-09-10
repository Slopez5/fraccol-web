<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretariesRealEstateController extends Controller
{
    //
    function index()
    {
        return view('real_estates.secretaries.index');
    }

    function create()
    {
        return view('real_estates.secretaries.create');
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
