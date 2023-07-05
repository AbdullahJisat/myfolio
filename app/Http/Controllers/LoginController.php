<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'password' => 'required|alphaNum|min:8',
            ]);

            $credentials = $request->only('name', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard')->with('success', 'Login successfully');
            };

            return redirect("login")->with('success', 'Opps! You have entered invalid credentials');
        }
        return view('backend.pages.profile.login');
    }

    public function logout()
    {
            Auth::logout();
            return redirect()->to('');
    }
}
