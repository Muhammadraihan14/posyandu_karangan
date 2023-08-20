<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\P_Fisik_Tindakan;
use Illuminate\Http\Request;
use App\Services\DesaService;
use App\Services\LansiaService;
use Illuminate\Pagination\Paginator;

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
        $data = statusRmalNutrisi::LansiaEdit($id);
        $desa = Desa::all();
        $fsk = P_Fisik_Tindakan::all();

        $FisikSelected = $data->pemerisaan_fisik_tindakan->last();
        $GangguanSelected = $data->riwayat_gangguan->last();
        $P3gSelected = $data->p3g->last();
        $LabSelected = $data->pemerisaan_lab->last();
     
        return view('admin.lansia.form', compact('data','desa', 'GangguanSelected' , 'FisikSelected', 'P3gSelected','LabSelected'));
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
                //table lansia
                'id' => 'required',
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
            // dd($params);
        }        
        $data = LansiaService::LansiaStore($params);
        if(!isset($request['id'])){
            return redirect('lansia')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('lansia')->with('successEdit', 'Berhasil mengedit data');
        }
    }

    
    public function detail($id)
    {
        $data = LansiaService::LansiaDetail($id);
        $desaSelected = $data->desa_id;
        $desa = Desa::find($desaSelected);
        if($data->p3g->last() != NULL){
           $statusMal = LansiaService::statusRmalNutrisi($data->p3g->last()->p_resiko_malnutrisi); 
           $statusMan = LansiaService::statusMandiri($data->p3g->last()->tingkat_kemandirian);
        } else{
             $statusMal = '';
             $statusMan = '';
        }
        if($data->pemerisaan_lab->last() != NULL){
            $statusKoles = LansiaService::statusKolesterol($data->pemerisaan_lab->last()->kolesterol);
            $statusGula = LansiaService::statusGula($data->pemerisaan_lab->last()->gula_darah);
            $statusAsamUrat = LansiaService::statusAsamUrat($data->pemerisaan_lab->last()->asam_urat, $data->gender);
            $statusHb = LansiaService::statusHB($data->pemerisaan_lab->last()->hb, $data->gender);
        } else{
            $statusKoles = '';
            $statusGula = '';
            $statusAsamUrat ='';
            $statusHb ='';
        }
        return view('admin.lansia.detail',compact('data','desa','statusMal','statusMan','statusKoles', 'statusGula','statusAsamUrat','statusHb'));
    }


}
