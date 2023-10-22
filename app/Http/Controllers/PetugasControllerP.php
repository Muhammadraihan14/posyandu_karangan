<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasControllerP extends Controller
{
    public function detail()
    {
        // $data = PetugasService::PetugasDetail($id);
        // dd('jalan');
        $data = Auth::user();
// dd($data);

        return view('petugas.petugas.detail', compact('data'));
    }
    
}
