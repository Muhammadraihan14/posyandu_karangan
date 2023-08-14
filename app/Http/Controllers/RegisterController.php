<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $username = $request['name'].rand(pow(10, 8 - 1), pow(10, 8) -1);
        // dd($username);

        $validated = $request->validate([
            'user_name' => 'min:6',
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $validated['user_name'] =  $username;
        

        User::create($validated);
        return redirect('login')->with('success', 'Registration Successful, Please Login');
    }
}
