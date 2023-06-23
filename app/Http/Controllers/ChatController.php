<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    static public function getResponse($data) {
        return $data["message"];
    }
}
