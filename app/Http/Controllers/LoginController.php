<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $success = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($success)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Username Or Password fault!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}