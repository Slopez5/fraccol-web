<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingPageDevelopmentController extends Controller
{
    //
    public function index()
    {

        return view('landing_page.development');
    }

    public function developmentDetails($development) {
        return view('landing_page.realEstate.developmentDetails');
    }


}
