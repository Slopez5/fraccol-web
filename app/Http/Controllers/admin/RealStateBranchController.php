<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\RealStateAgency;
use App\Models\RealStateBranch;
use Illuminate\Http\Request;

class RealStateBranchController extends Controller
{
    //
    function index($real_state_id)
    {

        $real_states_branches = RealStateAgency::find($real_state_id)->branches;
        return view('admin.real_state_branches.index', ["real_state_id" => $real_state_id,"real_states_branches" => $real_states_branches]);
    }

    function create($real_state_id)
    {

        return view('admin.real_state_branches.create',["real_state_id" => $real_state_id]);
    }

    function store($real_state_id, Request $request)
    {

        $real_state_agency = RealStateAgency::find($real_state_id);
        $branch = new RealStateBranch([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone
        ]);

        $address = new Address([
            "street"=> $request->street,
            "state_id"=>1,
            "city_id"=>2,
            "zip_code"=>"28500"
        ]);
        $address->save();
        $branch->address()->associate($address);
        logger($branch);
        $real_state_agency->branches()->save($branch);
        return redirect('admin/home');
    }

    function edit($real_state_id,$id)
    {
        $real_state = RealStateBranch::find($id);

        return view('admin.real_state_branches.edit',["real_state"=>$real_state]);
    }

    function update($real_state_id,$id)
    {
    }

    function destroy($real_state_id,$id)
    {
    }
}
