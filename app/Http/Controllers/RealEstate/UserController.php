<?php

namespace App\Http\Controllers\RealEstate;

use App\Classes\RoleType;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Users
    public function createUser()
    {
        return view('realEstates.users.create');
    }

    public function storeUser(Request $request)
    {
        $realEstate = Auth::user()->realEstates->first();
        $user = new User([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'username' => $request->get('username'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => RoleType::REAL_ESTATE_AGENT,
        ]);
        $user->save();
        logger($user);
        logger($realEstate->id);
        $user->realEstateAgencies()->attach($realEstate->id);
        return redirect()->route('realEstate.users');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('realEstates.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->username = $request->get('username');
        $user->phone = $request->get('phone');
        if ($request->get('password')) {
            $user->password = $request->get('password');
        }
        $user->save();
        return redirect()->route('realEstate.users');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('realEstate.users');
    }

    public function restoreUser($id)
    {
        $user = User::withTrashed()->find($id);
        $user->restore();
        return redirect()->route('realEstate.users');
    }

    public function showUser($id)
    {
        return view('realEstates.users.show');
    }
}
