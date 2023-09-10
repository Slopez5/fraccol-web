<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\RealEstateAgency;
use App\Models\RealEstateBranch;
use App\Models\RealStateBranch;
use Illuminate\Http\Request;

class RealEstateBranchAdminController extends Controller
{
    //
    function index($real_estate_id)
    {

        $real_estates_branches = RealEstateAgency::find($real_estate_id)->branches;
        return view('admin.real_estate_branches.index', ["real_estate_id" => $real_estate_id,"real_estates_branches" => $real_estates_branches]);
    }

    function create($real_estate_id)
    {

        return view('admin.real_estate_branches.create',["real_estate_id" => $real_estate_id]);
    }

    function store($real_estate_id, Request $request)
    {

        $real_estate_agency = RealEstateAgency::find($real_estate_id);
        $branch = new RealEstateBranch([
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
        $real_estate_agency->branches()->save($branch);
        return redirect('admin/home');
    }

    function edit($real_estate_id,$id)
    {
        $real_estate = RealEstateBranch::find($id);

        return view('admin.real_estate_branches.edit',["real_estate"=>$real_estate]);
    }

    function update($real_estates_id,$id)
    {
    }

    function destroy($real_estates_id,$id)
    {
    }
}
