<?php

namespace App\Http\Controllers\Api;

use App\Models\Desa;
use App\Models\User;
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

    public function me()
    {
        $user = Auth::user();
        // $data = User::find($user);
        // dd($user);
        return response()->json([
            "status"    => "success",
            "message" => "Profile Petugas",
            "data"   => $user,
        ]);
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
