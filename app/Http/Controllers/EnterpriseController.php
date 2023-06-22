<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    function privacyPolicy(){
        return view('privacy_policy');
    }
}
