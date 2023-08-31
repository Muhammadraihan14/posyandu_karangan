<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Services\DesaService;
use App\Services\LansiaService;
use App\Models\P_Fisik_Tindakan;
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
        $data = LansiaService::LansiaEdit($id);
        $desa = Desa::all();
        $fsk = P_Fisik_Tindakan::all();
        // dd($data);

        $FisikSelected = $data->pemerisaan_fisik_tindakan->last();
        // dd($FisikSelected);
        $GangguanSelected = $data->riwayat_gangguan->last();
        $P3gSelected = $data->p3g->last();
        $LabSelected = $data->pemerisaan_lab->last();
     
        return view('admin.lansia.form', compact('data','desa', 'GangguanSelected' , 'FisikSelected', 'P3gSelected','LabSelected'));
    }  
    public function save(Request $request)
    {
        // dd($request);
        if(!isset($request['id'])){
            $validated = $request->validate([
                //table lansia
                // 'petugas_id' => 'required',
                'name' => 'required',
                'umur' => 'required',
                'nik' => 'required|max:16|min:16',
                'umur' => 'required|max:3',
                'gender' => 'required',
                'alamat' => 'required',
                'desa_id' => 'required',
            //     'g_ginjal' => 'required',
            //     'g_pengelihatan' => 'required',
            //     'g_pendengaran' => 'required',
            //     'penyuluhan' => '',
            //     'pemberdayaan' => '',
            //     'keterangan' => '',
            //     //table p__fisik__tindakans
            //     'tanggal_p' => 'required',
            //     'tinggi_badan' => 'required',
            //     'berat_badan' => 'required',
            //     'sistole' => 'required',
            //     'diastole' => 'required',
            //     'lain' => '',
            //     'tata_laksana' => 'required',
            //     'konseling' => '',
            //     'rujuk' => '',
            //     // table p3_g_s
            //     'tanggal_p_p3g' => '',
            //     'tingkat_kemandirian' => '',
            //     'g_emosional' => '',
            //     'g_kognitiv' => '',
            //     'p_resiko_malnutrisi' => '',
            //     'p_resiko_jatuh' => '',
                
            //    //table p__l_a_b_s
            //     'tanggal_p_lab' => '',
            //     'kolesterol' => '',
            //     'gula_darah' => '',
            //     'asam_urat' => '',
            //     'hb' => '',
            ]);
            $params = $validated;;
            // dd($params);
        }else{
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                // 'petugas_id' => 'required',
                'name' => 'required',
                'nik' => 'required|max:16|min:16',
                'umur' => 'required|max:3',
                'gender' => 'required',
                'alamat' => 'required',
                'desa_id' => 'required',
                //riwayat
            //     'g_ginjal' => 'required',
            //     'g_pengelihatan' => 'required',
            //     'g_pendengaran' => 'required',
            //     'penyuluhan' => '',
            //     'pemberdayaan' => '',
            //     'keterangan' => '',
            //     //table p__fisik__tindakans
            //     'tanggal_p' => 'required',
            //     'tinggi_badan' => 'required',
            //     'berat_badan' => 'required',
            //     'sistole' => 'required',
            //     'diastole' => 'required',
            //     'lain' => '',
            //     'tata_laksana' => 'required',
            //     'konseling' => '',
            //     'rujuk' => '',
            //     // table p3_g_s
            //     'tanggal_p_p3g' => '',
            //     'tingkat_kemandirian' => '',
            //     'g_emosional' => '',
            //     'g_kognitiv' => '',
            //     'p_resiko_malnutrisi' => '',
            //     'p_resiko_jatuh' => '',
                
            //    //table p__l_a_b_s
            //     'tanggal_p_lab' => '',
            //     'kolesterol' => '',
            //     'gula_darah' => '',
            //     'asam_urat' => '',
            //     'hb' => '',
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

    
    public function detail(Request $request, $id)
    {
        $data = LansiaService::LansiaDetail($id);
        // dd($data);
        $dataGangguan = LansiaService::GangguanList($request);
        // $dataFisik = PemeriksaanFisikService::FiskList($request, $id);
        // dd($dataFisik);
        $desaSelected = $data->desa_id;
        $desa = Desa::find($desaSelected);
        
        $pemeriksaanFisik = $data->pemerisaan_fisik_tindakan()->paginate(5);
        // dd($pemeriksaanFisik);
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
     

        if($data->pemerisaan_fisik_tindakan->last() != NULL){
            $FisikSelected = $data->pemerisaan_fisik_tindakan->last();
        } else{
            $FisikSelected = "";

        }
        return view('admin.lansia.detail',
        compact('data','desa','statusMal',
        'statusMan', 'statusKoles', 'statusGula', 
        'statusAsamUrat','statusHb','dataGangguan' ,
        'FisikSelected','pemeriksaanFisik'));
    }
    public function detail_p3g(Request $request, $id)
    {
        $data = LansiaService::LansiaDetail($id);
        $dataGangguan = LansiaService::GangguanList($request);
        // dd($dataGangguan);
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
        return view('admin.lansia.detail_p3g',
        compact('data','desa','statusMal','statusMan',
                 'statusKoles', 'statusGula',
                  'statusAsamUrat','statusHb','dataGangguan'));
    }

    public function delete($id)
    {
        $data = LansiaService::deleteLansia($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }

    // ===========Riwayat Gangguan ====================


    public function create_ganngguan(Request $request)
    {
        dd($request);
        $desa = Desa::all();
        return view('admin.lansia.form', compact('desa'));
    }

    public function save_gangguan(Request $request)
    {

        if(!isset($request['id'])){
            $validated = $request->validate([
                //table lansia
                'user_id' => 'required',
                'lansia_id' => 'required',
                'g_ginjal' => 'required',
                'g_pengelihatan' => 'required',
                'g_pendengaran' => 'required',
                'penyuluhan' => 'required',
                'pemberdayaan' => 'required',
                'keterangan' => 'required',
            ]);
            $params = $validated;
        }else{
            // dd($request);
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                'lansia_id' => 'required',
                'user_id' => 'required',
                'g_ginjal' => 'required',
                'g_pengelihatan' => 'required',
                'g_pendengaran' => 'required',
                'penyuluhan' => 'required',
                'pemberdayaan' => 'required',
                'keterangan' => 'required',
            ]);
            $params = $validated;
        }  
        $data = LansiaService::LansiaStoreGangguan($params);
        if(!isset($request['id'])){
            return back()->with('success', 'Berhasil menambahkan data');
        }else{
            return  back()->with('successEdit', 'Berhasil mengedit data');
        }
    }

    public function delete_gangguan($id)
    {
        $data = LansiaService::deleteGangguan($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }

    // ================================================


    // ===========Fisik dan Tindakan ====================
        public function save_fisik(Request $request)
    {
        // dd($request);
        if(!isset($request['id'])){
            $validated = $request->validate([
                //table p__fisik__tindakans
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p' => 'required',
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'sistole' => 'required',
                'diastole' => 'required',
                'tata_laksana' => 'required',
                'konseling' => 'required',
                'rujuk' => 'required',
                'lain' => 'required',

            ]);
            $params = $validated;
            // dd($params);
        }else{
            // dd($request);
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p' => 'required',
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'sistole' => 'required',
                'diastole' => 'required',
                'lain' => 'required',
                'tata_laksana' => 'required',
                'konseling' => 'required',
                'rujuk' => 'required',
            ]);
            $params = $validated;
            // dd($params);
        }

        $data = LansiaService::LansiaStoreFisik($params);
        if(!isset($request['id'])){
            return back()->with('success', 'Berhasil menambahkan data');
        }else{
            return  back()->with('successEdit', 'Berhasil mengedit data');
        }
    }

    public function delete_fisik($id)
    {
        // dd($id);
        $data = LansiaService::deleteFisikTindakan($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
    // =================================================
}
