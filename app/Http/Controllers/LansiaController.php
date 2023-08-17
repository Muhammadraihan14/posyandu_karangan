<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Services\DesaService;
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
    public function create(Request $request)
    {
        // dd("ihan");
        $desa = Desa::all();
        return view('admin.lansia.form', compact('desa'));
    }
    public function edit($id) 
    {      
        $data = LansiaService::LansiaEdit($id);
        $desa = Desa::all();
        return view('admin.lansia.form', compact('data', 'desa'));
    }  
    public function save(Request $request)
    {
        
        if(!isset($request['id'])){
            $validated = $request->validate([
                //table lansia
                'petugas_id' => 'required',
                'name' => 'required',
                'umur' => 'required',
                'nik' => 'required|max:16|min:16',
                'umur' => 'required|max:3',
                'gender' => 'required',
                'alamat' => 'required',
                'desa_id' => 'required',
                'g_ginjal' => 'required',
                'g_pengelihatan' => 'required',
                'g_pendengaran' => 'required',
                'penyuluhan' => '',
                'pemberdayaan' => '',
                'keterangan' => '',
                //table p__fisik__tindakans
                'tanggal_p' => 'required',
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'sistole' => 'required',
                'diastole' => 'required',
                'lain' => '',
                'tata_laksana' => 'required',
                'konseling' => '',
                'rujuk' => '',
                // table p3_g_s
                'tanggal_p_p3g' => '',
                'tingkat_kemandirian' => '',
                'g_emosional' => '',
                'g_kognitiv' => '',
                'p_resiko_malnutrisi' => '',
                'p_resiko_jatuh' => '',
                
               //table p__l_a_b_s
                'tanggal_p_lab' => '',
                'kolesterol' => '',
                'gula_darah' => '',
                'asam_urat' => '',
                'hb' => '',
            ]);
            $params = $validated;
        }else{
            $validated = $request->validate([
                'name' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
            ]);

            $params = $validated;
            // dd("ihan ini");


            // $params = $request->all();
        }        
        $data = LansiaService::LansiaStore($params);
        if(!isset($request['id'])){
            return redirect('lansia')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('lansia')->with('successEdit', 'Berhasil mengedit data');
        }
    }


}
