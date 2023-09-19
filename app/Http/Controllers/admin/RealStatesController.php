<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RealEstateAgency;
use Illuminate\Http\Request;

class RealStatesController extends Controller
{
    //

    function index()
    {
        $real_estates = RealEstateAgency::all();
        return view('admin.real_estates.index', ["real_estates" => $real_estates]);
    }

    function create()
    {

        return view('admin.real_estates.create');
    }

    function store(Request $request)
    {
        $real_estates = new RealEstateAgency();
        $real_estates->name = $request->name;
        $real_estates->email = $request->name;
        $real_estates->name = $request->name;
        $real_estates->name = $request->name;
        return $request;
    }

    function edit($id)
    {
        $real_estates = RealEstateAgency::find($id);

        return view('admin.real_estates.edit',["real_estates"=>$real_estates]);
    }

    function update($id)
    {
    }

    function destroy($id)
    {
    }
}
