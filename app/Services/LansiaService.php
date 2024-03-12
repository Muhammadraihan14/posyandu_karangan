<?php

namespace App\Services;

use DB;
use App\Models\P3G;
use App\Models\User;
use App\Models\Admin;
use App\Models\P_LAB;
use App\Models\Lansia;
use App\Models\R_gangguan;
use App\Services\LansiaService;
use App\Models\P_Fisik_Tindakan;
use Illuminate\Pagination\Paginator;
// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class LansiaService
{
    public static function lansiaList(Request $request)
    {
        if($request->has('keywords')){
            $data = Lansia::where(function ($row) use ($request){
                    $row->where(function ($query) use ($request) {
                        $query->where('lansias.name', 'like', '%' . $request->keywords . '%')
                            ->orWhere('lansias.nik', 'like', '%' . $request->keywords . '%');
                    });
            })->paginate(5);
        }else{
            $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g' , 'riwayat_gangguan' )->paginate(5);
        }
        Paginator::useBootstrap();
        return $data;
    }
    public static function lansiaListM()
    {
        $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g' , 'riwayat_gangguan' )->paginate(10000);
        Paginator::useBootstrap();
        return $data;
    }
    public static function searchLansia($request)
    {
        $params = $request;
        // dd($params);
        $data = Lansia::where(function ($row) use ($params){
            $row->where(function ($query) use ($params) {
                foreach($params as $key=>$value){
                    if($key=='name'){
                        $query->where('lansias.name', 'like', '%' . $params['name'].'%');
                    }
                    else{
                        $query->where($key,$value);
                    }
                }
            });
    })->paginate(10000);

        Paginator::useBootstrap();
        return $data;
        
    }



    public static function GangguanList(Request $request)
    {
        $data = R_gangguan::paginate(5);
        Paginator::useBootstrap();
        return $data;
    }
    public static function LansiaStore($params)
    {
        DB::beginTransaction();
        try {
            $inputlansia['name'] = $params['name'];
            $inputlansia['umur'] = $params['umur'];
            $inputlansia['nik'] = $params['nik'];
            $inputlansia['alamat'] = $params['alamat'];
            $inputlansia['gender'] = $params['gender'];
            $inputlansia['desa_id'] = $params['desa_id'];
            if (isset($params['id'])) {
                $data =  Lansia::find($params['id']);
                $data->update($inputlansia);
            }else{
                $data = Lansia::create($inputlansia);
            }
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function LansiaDetail($id)
    {
        $data = Lansia::with('pemerisaan_fisik_tindakan.user','pemerisaan_lab.user','p3g.user' , 'riwayat_gangguan.user')->find($id);
        return $data;
    }
    public static function LansiaEdit($id)
    {
        // dd("edit");
        $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g' , 'riwayat_gangguan')->find($id);
        // dd($data);
        return $data;
    }
    public static function deleteLansia($id)
    {
        // $data = Lansia::with('user')->find($id);
        $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g' , 'riwayat_gangguan.user')->find($id);
        // dd($data);

        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }

    public static function statusMandiri($param){
        $data ="";
        if($param == 'A'){
          return $data = "Mandiri";
        } elseif ($param == 'B'){
            return $data = "Ketergantungan Sedang / Ringan";
        } else{
            return $data = "Ketergantungan Berat / Total";
        }
        return $data;
    }
    public static function statusKolesterol($param){
        $data ="";
        if($param < 190){
          return $data = "Normal";
        } else{
            return $data = "Tinggi";
        }
        return $data;
    }
    public static function statusGula($param){
        $data ="";
        if($param < 200){
          return $data = "Normal";
        } else{
            return $data = "Tinggi";
        }
        return $data;
    }
    public static function statusAsamUrat($param, $gender){
        $data ="";
        if($gender == "pria"){
            if($param >= 3.05 && $param <= 7.00){
                return $data = "Normal";
            }else{
                return $data = "Tinggi";
            }
        }else{
            if($param >= 2.06 && $param <= 6.00){
                return $data = "Normal";
            }else{
                return $data = "Tinggi";
            }
        }
        return $data;
    }
    public static function statusHB($param,$gender){
        $data ="";
        if($gender == "pria"){
            if($param < 13){
                return $data = "Anemia";
            }else{
                return $data = "Normal";
            }
        }else{
            if($param < 12){
                return $data = "Anemia";
            }else{
                return $data = "Normal";
            }
        }
        return $data;
    }
    // ============= Gangguan ===================
    public static function LansiaStoreGangguan($params)
    {
        DB::beginTransaction();
        try {
            $inputRiwayat['user_id'] = $params['user_id'];
            $inputRiwayat['lansia_id'] = $params['lansia_id'];
            $inputRiwayat['desa_id'] = $params['desa_id'];
            $inputRiwayat['tanggal_p_g'] = $params['tanggal_p_g'];
            $inputRiwayat['g_ginjal'] = $params['g_ginjal'];
            $inputRiwayat['g_pengelihatan'] = $params['g_pengelihatan'];
            $inputRiwayat['g_pendengaran'] = $params['g_pendengaran'];
            $inputRiwayat['penyuluhan'] = $params['penyuluhan'];
            $inputRiwayat['pemberdayaan'] = $params['pemberdayaan'];
            $inputRiwayat['keterangan'] = $params['keterangan'];
            if (isset($params['id'])) {
                $data =  R_gangguan::find($params['id']);
                $data->update($inputRiwayat);
            }else{
                $data = R_gangguan::create($inputRiwayat);
            }
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function deleteGangguan($id)
    {
        // $data = Lansia::with('user')->find($id);
        $data = R_gangguan::find($id);
        // dd($data);

        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }

    // ============= End Gangguan===================




    // =============Pemeriksaan fisik dan tindakan===================
    public static function IMT($bb,$tb)
    {
        $toMeter = $tb/100;
        $imt = number_format($bb / ($toMeter * $toMeter), 1);
        return $imt;
    }
    public static function statusGizi($nilai)
    {
       $data ="";

           if($nilai < 18.5){
             return $data = "Kurang";
           } elseif ($nilai >= 18.5 && $nilai <= 25 ){
            return $data = "Normal";
           } else {
            return $data = "Lebih";
           }
            return $data;
    }
    public static function tekananDarah($sistole ,$diastole)
    {
        $data ="";
        if(($sistole < 100) || ($diastole < 70 )){
            return $data = "Rendah";
        } elseif (($sistole >= 100 && $sistole <= 140) && ($diastole >= 70 && $diastole <= 95)){
            return $data = "Normal";
        } else{
            return $data = "Tinggi";
        }
        return $data;
    }
    public static function statusRmalNutrisi($param)
    {
        $data ="";
        if($param == 'RM'){
            return $data = "Resiko Malnutrisi";
        } elseif ($param == 'M'){
            return $data = "Malnutrisi";
        } else{
            return $data = "Normal";
        }
        return $data;
    }
    public static function LansiaStoreFisik($params)
    {
        // dd($params);
        $nilai_imt =  LansiaService::IMT($params['berat_badan'], $params['tinggi_badan']);
        // $nilai_tk =  LansiaService::tekananDarah($params['sistole'], $params['diastole']);
        
        if(isset($params['imt'])){
            // dd('masuk');
            $statusGizi =  LansiaService::statusGizi($params['imt']);

        }else{
            $statusGizi =  LansiaService::statusGizi($nilai_imt);
            // dd('masuk2');
        }


        DB::beginTransaction();
        try {

            // wajib
            $inputFisik['user_id'] = $params['user_id'];
            $inputFisik['desa_id'] = $params['desa_id'];
            $inputFisik['lansia_id'] = $params['lansia_id'];
            $inputFisik['tanggal_p'] = $params['tanggal_p'];
            $inputFisik['berat_badan'] = $params['berat_badan'];
            $inputFisik['tinggi_badan'] = $params['tinggi_badan'];
           
            if(isset($params['imt'])){
                $inputFisik['imt'] = $params['imt'];
            }else{
                 $inputFisik['imt'] = $nilai_imt;
            }
            $inputFisik['status_gizi'] = $statusGizi;

            // tidak wajib
            // $inputFisik['sistole'] = $params['sistole'];
            // $inputFisik['diastole'] = $params['diastole'];
            // $inputFisik['tekanan_darah'] = $nilai_tk;
            // $inputFisik['tata_laksana'] = $params['tata_laksana'];
            // if(isset($params['tata_laksana'])){
            //     $inputFisik['tata_laksana'] = $params['tata_laksana'];
            // }       
            // if(isset($params['sistole'])){
            //     $inputFisik['sistole'] = $params['sistole'];
            // }       
            // if(isset($params['diastole'])){
            //     $inputFisik['diastole'] = $params['diastole'];
            // }      
            // if(isset($params['tekanan_darah'])){
            //     $inputFisik['tekanan_darah'] = $params['tekanan_darah'];
            // } 
            if(isset($params['lain'])){
                $inputFisik['lain'] = $params['lain'];
            } 
            if(isset($params['konseling'])){
                $inputFisik['konseling'] = $params['konseling'];
            } 
            if(isset($params['rujuk'])){
                $inputFisik['rujuk'] = $params['rujuk'];
            } 

            if (isset($params['id'])) {
                $data =  P_Fisik_Tindakan::find($params['id']);
                $data->update($inputFisik);
            }else{
                $data = P_Fisik_Tindakan::create($inputFisik);
            }
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function deleteFisikTindakan($id)
    {
        // $data = Lansia::with('user')->find($id);
        $data = P_Fisik_Tindakan::find($id);
        // dd($data);

        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
    // =============End Pemeriksaan fisik dan tindakan===============
    // ============= LAB ==================
    public static function LansiaStoreLAB($params)
    {
        // dd($params);
        $jk = Lansia::find($params["lansia_id"]);
        // dd($jk);
        $dtAsamUrat = LansiaService::statusAsamUrat($params['asam_urat'], $jk->gender);
        DB::beginTransaction();
        try {
            $inputLabs['user_id'] = $params['user_id'];
            $inputLabs['lansia_id'] = $params['lansia_id'];
            $inputLabs['desa_id'] = $params['desa_id'];
            $inputLabs['tanggal_p_lab'] = $params['tanggal_p_lab'];
            $inputLabs['kolesterol'] = $params['kolesterol'];
            $inputLabs['gula_darah'] = $params['gula_darah'];
            $inputLabs['asam_urat'] = $params['asam_urat'];
            $inputLabs['status_asam_urat'] = $dtAsamUrat;
            $inputLabs['hb'] = $params['hb'];
            if (isset($params['id'])) {
                $data =  P_LAB::find($params['id']);
                $data->update($inputLabs);
            }else{
                $data = P_LAB::create($inputLabs);
            }
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function delete_lab($id)
    {
        $data = P_LAB::find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
    // ============= End LAB==============
    // ============= P3G ==================
    public static function LansiaStoreP3G($params)
    {
        DB::beginTransaction();
        try {
                $inputP3G['user_id'] = $params['user_id'];
                $inputP3G['lansia_id'] = $params['lansia_id'];
                $inputP3G['desa_id'] = $params['desa_id'];
                $inputP3G['tanggal_p_p3g'] = $params['tanggal_p_p3g'];
                $inputP3G['tingkat_kemandirian'] = $params['tingkat_kemandirian'];
                $inputP3G['g_emosional'] = $params['g_emosional'];
                $inputP3G['g_kognitiv'] = $params['g_kognitiv'];
                $inputP3G['p_resiko_malnutrisi'] = $params['p_resiko_malnutrisi'];
                $inputP3G['p_resiko_jatuh'] = $params['p_resiko_jatuh'];
            if (isset($params['id'])) {
                $data =  P3G::find($params['id']);
                $data->update($inputP3G);
            }else{
							// dd('Error');
                $data = P3G::create($inputP3G);
            }
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function delete_p3g($id)
    {
        $data = P3G::find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
    // ============= End P3G==============


    public static function totalLansia()
    {
        $data = Lansia::count();
        // dd($data);
        return $data;
    }
}