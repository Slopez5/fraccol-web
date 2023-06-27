<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    //
    function details($id){
        $development = Development::find($id);
        return view('admin.developments.developmentDetails',["development"=>$development]);
    }
}
