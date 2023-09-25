<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Sensor;
use App\Events\SensorEvent;
use Illuminate\Http\Request;
use App\Services\DesaService;
use App\Services\LansiaService;
use App\Services\SensorService;
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
        $dataSensor = SensorService::getDataSensor();   
        $dataGangguan = LansiaService::GangguanList($request);
        // $dataFisik = PemeriksaanFisikService::FiskList($request, $id);
        // dd($dataFisik);
        $desaSelected = $data->desa_id;
        $desa = Desa::find($desaSelected);
        $pemeriksaanFisik = $data->pemerisaan_fisik_tindakan()->paginate(3);
        $riwayat_gangguan = $data->riwayat_gangguan()->paginate(3);
        $pemerisaan_lab = $data->pemerisaan_lab()->paginate(3);
        $p3g = $data->p3g()->paginate(3);
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
        'FisikSelected','pemeriksaanFisik', 'riwayat_gangguan',
        'pemerisaan_lab','p3g'));
    }
    public function delete($id)
    {
        $data = LansiaService::deleteLansia($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }

    // ===========Riwayat Gangguan ====================

    public function save_gangguan(Request $request)
    {
        // dd($request);

        if(!isset($request['id'])){
            $validated = $request->validate([
                //table lansia
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p_g' => 'required',
                'g_ginjal' => 'required',
                'g_pengelihatan' => 'required',
                'g_pendengaran' => 'required',
                'penyuluhan' => 'required',
                'pemberdayaan' => 'required',
                'keterangan' => 'required',
            ]);
            $params = $validated;
            // dd($params);
        }else{
            // dd($request);
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p_g' => 'required',
                'user_id' => 'required',
                'g_ginjal' => 'required',
                'g_pengelihatan' => 'required',
                'g_pendengaran' => 'required',
                'penyuluhan' => 'required',
                'pemberdayaan' => 'required',
                'keterangan' => 'required',
            ]);
            $params = $validated;
            // dd($params);
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
    public function detail_gangguan($id)
    {
        // dd($id);
        $data = LansiaService::LansiaDetail($id);
        // $pemeriksaanFisik = $data->pemerisaan_fisik_tindakan()->paginate(3);
        $riwayat_gangguan = $data->riwayat_gangguan()->paginate(5);
        // if($data->pemerisaan_fisik_tindakan->last() != NULL){
        //     $FisikSelected = $data->pemerisaan_fisik_tindakan->last();
        // } else{
        //     $FisikSelected = "";

        // }
        Paginator::useBootstrap();

        return view('admin.lansia.detail_gangguan',compact('data','riwayat_gangguan'));

    }

    // ================================================


    // ===========Fisik dan Tindakan ====================
        public function save_fisik(Request $request)
    {
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
        }else{
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
    public function detail_fisik($id)
    {
        // dd($id);



        $dataSensor = Sensor::find(1);
        // dd($dataSensor);
        event(new SensorEvent($dataSensor->berat_badan, $dataSensor->tinggi_badan));
        $data = LansiaService::LansiaDetail($id);
        $pemeriksaanFisik = $data->pemerisaan_fisik_tindakan()->paginate(5);
        if($data->pemerisaan_fisik_tindakan->last() != NULL){
            $FisikSelected = $data->pemerisaan_fisik_tindakan->last();
        } else{
            $FisikSelected = "";

        }
        Paginator::useBootstrap();

        return view('admin.lansia.detail_fisik',compact('data','pemeriksaanFisik','FisikSelected'));

    }
    // =================================================
    // ===========LAB ==================================
    public function save_lab(Request $request)
    {
        // dd($request);
        if(!isset($request['id'])){
            $validated = $request->validate([
               //table p__l_a_b_s
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p_lab' => 'required',
                'kolesterol' => 'required',
                'gula_darah' => 'required',
                'asam_urat' => 'required',
                'hb' => 'required',

            ]);
            $params = $validated;
            // dd($params);
        }else{
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p_lab' => 'required',
                'kolesterol' => 'required',
                'gula_darah' => 'required',
                'asam_urat' => 'required',
                'hb' => 'required', 
            ]);
            $params = $validated;

            // dd($params);
        }
        $data = LansiaService::LansiaStoreLAB($params);
        if(!isset($request['id'])){
            return back()->with('success', 'Berhasil menambahkan data');
        }else{
            return  back()->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function delete_lab($id)
    {
        // dd($id);
        $data = LansiaService::delete_lab($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
    public function detail_lab(Request $request, $id)
    {
        // dd($id);
        $data = LansiaService::LansiaDetail($id);
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
        $pemerisaan_lab = $data->pemerisaan_lab()->paginate(5);
        Paginator::useBootstrap();
        return view('admin.lansia.detail_lab',compact('data','pemerisaan_lab','statusKoles','statusGula','statusAsamUrat','statusHb'));

    }
    // =================================================
    // =========== P3G ==================================
    public function save_p3g(Request $request)
    {
        // dd($request);
        if(!isset($request['id'])){
            $validated = $request->validate([
                // table p3_g_s
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p_p3g' => 'required',
                'tingkat_kemandirian' => 'required',
                'g_emosional' => 'required',
                'g_kognitiv' => 'required',
                'p_resiko_malnutrisi' => 'required',
                'p_resiko_jatuh' => 'required',
            ]);
            $params = $validated;
            // dd($params);
        }else{
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                'user_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p_p3g' => 'required',
                'tingkat_kemandirian' => 'required',
                'g_emosional' => 'required',
                'g_kognitiv' => 'required',
                'p_resiko_malnutrisi' => 'required',
                'p_resiko_jatuh' => 'required', 
            ]);
            $params = $validated;

            // dd($params);
        }
        $data = LansiaService::LansiaStoreP3G($params);
        if(!isset($request['id'])){
            return back()->with('success', 'Berhasil menambahkan data');
        }else{
            return  back()->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function delete_p3g($id)
    {
        // dd($id);
        $data = LansiaService::delete_p3g($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
    public function detail_p3g($id)
    {
        // dd($id);
        $data = LansiaService::LansiaDetail($id);
        $p3g = $data->p3g()->paginate(5);
        if($data->p3g->last() != NULL){
            $statusMal = LansiaService::statusRmalNutrisi($data->p3g->last()->p_resiko_malnutrisi); 
            $statusMan = LansiaService::statusMandiri($data->p3g->last()->tingkat_kemandirian);
         }else{
              $statusMal = '';
              $statusMan = '';
         }
        Paginator::useBootstrap();
        return view('admin.lansia.detail_p3g',compact('data','p3g','statusMal','statusMan'));

    }
    // =================================================





}
