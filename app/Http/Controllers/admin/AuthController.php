<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    function login()
    {
        return view('admin.auth.login');
    }

    function authLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attemptWhen($credentials, function(User $user) {
            return $user->isAdmin();
        })){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
        
    }

    function register()
    {
        return view('admin.auth.register');
    }
}
