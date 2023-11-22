<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            if(Auth::user()-> user_type == 'petugas'){
                $auth = Auth::user();
                $success['token'] = $auth->createToken('petugas');
                $data = [
                    "status"    => "success",
                    "message"   => "Login success",
                    "data"      => $success,
                    "user"      => $auth,
                ];
                return $data;

            } else {
                return response()->json([
                    "status"    => "failed",
                    "message"   => "user_type error",
                ]);
            }
        }else{
            //tidak sah
            return response()->json([
                "status"    => "failed",
                "message"   => "Unauthorised",
            ]);
        } 
    }
    public function logout()
    {
        $user = auth('sanctum')->user()->tokens()->delete();
        return response()->json([
            "status"    => "success",
            "message"   => "logout success",
        ]);
    }

    
}
