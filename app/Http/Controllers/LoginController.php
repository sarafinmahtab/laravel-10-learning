<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function submit(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::firstWhere([
            'email' => $email,
        ]);

        if ($user && Hash::check($password, $user->password)) {
            return redirect('/');
        } else {
            // Invalid credentials, handle error
            return redirect('login')->withErrors(['error' => 'Invalid email or password.']);
        }
    }
}
