<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function GetAPI(Request $request) {
        return response()->json(['message' => 'Hello, this is your text!']);
    }
}
