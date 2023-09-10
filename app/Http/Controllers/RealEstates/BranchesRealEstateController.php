<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchesRealEstateController extends Controller
{
    //
    function index()
    {
        return view('real_estates.branches.index');
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
