<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    // Permissions

    public function createPermission()
    {
        return view('realEstates.permissions.create');
    }

    public function storePermission(Request $request)
    {
        return redirect()->route('realEstate.permissions');
    }

    public function editPermission($id)
    {
        return view('realEstates.permissions.edit');
    }

    public function updatePermission(Request $request, $id)
    {
        return redirect()->route('realEstate.permissions');
    }

    public function deletePermission($id)
    {
        return redirect()->route('realEstate.permissions');
    }

    public function showPermission($id)
    {
        return view('realEstates.permissions.show');
    }
}
