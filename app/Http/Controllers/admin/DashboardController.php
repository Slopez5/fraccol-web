<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function dashboard(){
        $developments = Development::with('realStateAgency')->get();
        logger( $developments[0]->realStateAgency);
        return view('admin/home',["developments" => $developments]);
    }
}
