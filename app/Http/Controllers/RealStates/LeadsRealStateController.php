<?php

namespace App\Http\Controllers\RealStates;

use App\Http\Controllers\Chatbot\ChatGPTController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use thiagoalessio\TesseractOCR\TesseractOCR;


class LeadsRealStateController extends Controller
{
    //

    function index()
    {
    }

    function create()
    {
    }

    function store(Request $request)
    {
    }

    function edit($id)
    {
    }

    function update(Request $request)
    {
        $path = Storage::disk('public')->putFile('image', $request->file('image'));
        $ocr = new TesseractOCR(public_path('storage/' . $path));
        $ocr->allowlist(range('A', 'Z')," ");
        $text = $ocr->run();
        
        return ChatGPTController::getResponseGPT(trim($text));
    }

    function destroy($id)
    {
    }
}
