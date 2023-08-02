<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function dashboard(){
        $developments = Development::with('realStateAgency')->get();
        return view('admin.home',["developments" => $developments]);
    }
}
