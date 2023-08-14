<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DesaService;

class DesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = DesaService::DesaList($request);
        return view('admin.desa.index', compact('data'));
    }
    public function create(Request $request)
    {
       
        return view('admin.desa.form');
    }
    public function map(Request $request)
    {
       
        return view('admin.desa.map');
    }
}
