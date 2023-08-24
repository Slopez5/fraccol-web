<?php

namespace App\Http\Controllers\RealStates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardRealStatesController extends Controller
{
    //

    function dashboard() {
        return view('real_state.home');
    }
}
