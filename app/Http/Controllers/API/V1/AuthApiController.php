<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    //

    public function createUser(Request $request)
    {
        $role = Role::find($request["role_id"]);
        $admin = new User();
        $admin->role()->associate($role);
        $admin->username = $request["username"];
        $admin->first_name = $request["first_name"];
        $admin->last_name = $request["last_name"];
        $admin->phone = $request["phone"];
        $admin->email = $request["email"];
        $admin->password = bcrypt($request["password"]);
        $admin->save();

        return response()->success(["admin" => $admin], ["code" => 200, "Text" => "Administrador agregado correctamente"]);
    }

    public function login(Request $request)
    {
        $email = $request["email"];
        $password = $request["password"];
        $user = User::where('email', $email)->get()->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                $token = $user->createToken('Bearer')->accessToken;
                $user["token"] = $token;
                return $user;
            }
            return $user->password;
        }

        return $user;
    }

    public function register()
    {
    }

    public function forgetPassword()
    {
    }
}
