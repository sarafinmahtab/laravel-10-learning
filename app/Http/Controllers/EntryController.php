<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    //
    function submit(Request $request) {
        return $request->input();
    }
}
