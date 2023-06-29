<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class DevelopmentController extends Controller
{
    //
    function details($id)
    {
        $development = Development::with(['lots','lots.images'])->find($id);
        logger($development);
        return view('admin.developments.developmentDetails', ["development" => $development,"images"=>$development->lots[0]->images]);
    }

    function images()
    {


    }
}
