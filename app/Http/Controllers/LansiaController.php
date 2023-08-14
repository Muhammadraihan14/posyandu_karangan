<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LansiaService;

class LansiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = LansiaService::lansiaList($request);
        return view('admin.lansia.index', compact('data'));
    }


}
