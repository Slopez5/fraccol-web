<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesApiController extends Controller
{
    //

    public function addRole(Request $request)
    {
        $role = new Role(["name" => $request["name"], "description" => $request["description"]]);
        $role->save();

        return response()->success(["role" => $role], ["code" => 200, "Text" => "Rol agregado correctamente"]);
    }
}
