<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    function privacyPolicy()
    {
        $enterpise = "Fraccionamientos Colima";
        $email = "sergio0695@gmail.com";
        $phone = "3122250707";
        $address = "Degollado 115";
        $position = "CEO";
        return view('privacy_policy', ["enterprise" => $enterpise, "email" => $email,"phone"=>$phone,"address"=>$address,"position" => $position]);
    }
}
