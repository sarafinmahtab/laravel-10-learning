<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EntryController extends Controller
{
    //
    function submit(Request $request) {
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect('login')->with('user', $user->name);
    }
}
