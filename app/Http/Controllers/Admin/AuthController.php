<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login()
    {
        return view('admin.pages.signin');
    }

    function processLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            // kasih session
            $request->session()->regenerate();

            if (Auth::user()) {
                return redirect('/admin')->with('success', "Login Admin Berhasil!");
            }

            // return redirect()->intended('dashboard');
        } else {
            // Session::flash('status', 'fail');
            // Session::flash('message', 'Login Invalid!');
            return redirect('/admin/login')->withErrors('Login Invalid');
        }
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', "Logout Berhasil!");
    }
}
