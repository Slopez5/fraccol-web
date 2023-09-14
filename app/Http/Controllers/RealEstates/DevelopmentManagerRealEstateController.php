<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DevelopmentManagerRealEstateController extends Controller
{
    //
    function index()
    {
        $users = User::where('role_id', 4)->get();
        return view('real_estates.developmentManager.index', ["users" => $users]);
    }

    function create()
    {
        return view('real_estates.developmentManager.create');
    }

    function store(Request $request)
    {
        $user = new User();
        $user->role_id = 4;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('realEstate.developmentManagers.index');
    }

    function edit($id)
    {
        $user = User::find($id);
        return view('real_estates.developmentManager.edit',["user"=>$user]);
    }

    function update($id, Request $request)
    {
        $user = User::find($id);
        $user->role_id = 4;
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route('realEstate.developmentManagers.index');
    }

    function destroy($id)
    {
        User::find($id)->delete();
    }
}
