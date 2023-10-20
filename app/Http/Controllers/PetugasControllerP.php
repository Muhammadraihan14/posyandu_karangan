<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasControllerP extends Controller
{
    public function detail()
    {
        // $data = PetugasService::PetugasDetail($id);
        dd('jalan');
        return view('petugas.petugas.detail');
    }
    
}
