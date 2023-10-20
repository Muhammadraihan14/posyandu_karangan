<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            if(Auth::user()-> user_type == 'admin'){
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            } else if (Auth::user()-> user_type == 'petugas'){
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }
        }
     
        return back()->with('error', 'Login failed !');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        //    dd($request);
        return redirect('/');
    }
}
