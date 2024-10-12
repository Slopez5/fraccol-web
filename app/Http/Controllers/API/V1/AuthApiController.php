<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\TryCatch;

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
        $user = User::where('email', $email)->orWhere('username', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                $token = $user->createToken('Bearer')->accessToken;
                return response()->success(["user" => $user, "token" => $token], ["code" => 200, "Text" => "Login correctamente"]);
            }
            return response()->failure(["error" => "Ocurrio un error al iniciar sesion"], ["code" => 1000]);
        }

        return response()->failure(["error" => "Ocurrio un error al iniciar sesion"], ["code" => 1000]);
    }

    public function register(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'role_id' => 'required',
                'username' => 'required|unique:users,username',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
            ]);

            $role = Role::find($request["role_id"]);
            $user = new User();
            $user->role()->associate($role);
            $user->username = $request["username"];
            $user->first_name = $request["first_name"];
            $user->last_name = $request["last_name"];
            $user->phone = $request["phone"];
            $user->email = $request["email"];
            $user->password = bcrypt($request["password"]);
            $user->save();

            // Create token
            $token = $user->createToken('Bearer')->accessToken;

            return response()->success(["user" => $user, "token" => $token], ["code" => 200, "Text" => "Usuario registrado correctamente"]);
        } catch (ValidationException $e) {
            return response()->failure([ $e->errors()], ["code" => 1000]);
        }
    }

    public function forgetPassword() {

    }
}
