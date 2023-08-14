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
        // dd("ihan");
       
        return view('admin.desa.form');
    }
    public function map(Request $request)
    {
       
        return view('admin.desa.map');
    }
    public function edit($id) 
    {      
        $data = DesaService::DesaEdit($id);
        return view('admin.desa.form', compact('data'));
    }  
    public function save(Request $request)
    {
        // dd($request);
        if(!isset($request['id'])){
            $validated = $request->validate([
                'name' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
            ]);
            $params = $validated;
        }else{
            $validated = $request->validate([
                'id'=>'required',
                'name' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
            ]);
            $params = $validated;
            // dd("ihan ini");


            // $params = $request->all();
        }        
        $data = DesaService::DesaStore($params);
        if(!isset($request['id'])){
            return redirect('desa')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('desa')->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function delete($id)
    {
        $data = DesaService::delete($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
}
