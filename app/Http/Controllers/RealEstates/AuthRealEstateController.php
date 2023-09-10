<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRealEstateController extends Controller
{
    //

    function login() {
        return view('real_estates.auth.login');
    }

    function authLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attemptWhen($credentials, function(User $user) {
            return $user->isRealState();
        })){
            return redirect()->route('realEstate.dashboard');
        } else {
            return redirect()->route('realEstate.login');
        }
    }

    function register() {

    }
}
