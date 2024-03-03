<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{
    public function create(){
        return view('auth.login-form');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => "required|email",
            'password' => "required",
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Authentication successful
            return redirect()->route('dashboard')->with('success', 'Login successful');
        } else {
            // Authentication failed
            return back()->with('error', 'Invalid credentials. Check the email address and password entered.');
        }
    }
}
