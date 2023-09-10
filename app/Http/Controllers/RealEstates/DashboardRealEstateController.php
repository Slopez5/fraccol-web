<?php

namespace App\Http\Controllers\RealEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardRealEstateController extends Controller
{
    //

    function dashboard() {
        return view('real_estates.home');
    }
}
