<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function login_submit(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard'); // Redirect to the intended page after successful login
        }

        // If authentication fails, redirect back with an error message
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
}
