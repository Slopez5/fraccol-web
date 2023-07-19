<?php

namespace App\Http\Controllers\SalesPerson;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    function index($subdomain) {
        return $subdomain;
    }
}
