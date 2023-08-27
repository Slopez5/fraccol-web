<?php

namespace App\Http\Controllers\RealStates;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthRealStateController extends Controller
{
    //

    function login() {
        return view('real_state.auth.login');
    }

    function authLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attemptWhen($credentials, function(User $user) {
            return $user->isRealState();
        })){
            return redirect()->route('realState.dashboard');
        } else {
            return redirect()->route('realState.login');
        }
    }

    function register() {

    }
}
