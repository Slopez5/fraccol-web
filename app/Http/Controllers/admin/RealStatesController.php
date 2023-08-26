<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RealStateAgency;
use Illuminate\Http\Request;

class RealStatesController extends Controller
{
    //

    function index()
    {

        $real_states = RealStateAgency::all();
        return view('admin.real_states.index', ["real_states" => $real_states]);
    }

    function create()
    {

        return view('admin.real_states.create');
    }

    function store(Request $request)
    {
        $real_state = new RealStateAgency();
        $real_state->name = $request->name;
        $real_state->email = $request->name;
        $real_state->name = $request->name;
        $real_state->name = $request->name;
        return $request;
    }

    function edit($id)
    {
        $real_state = RealStateAgency::find($id);

        return view('admin.real_states.edit',["real_state"=>$real_state]);
    }

    function update($id)
    {
    }

    function destroy($id)
    {
    }
}
