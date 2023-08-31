<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Lansia;
use App\Models\R_gangguan;
use App\Models\P_Fisik_Tindakan;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class LansiaService
{
    public static function lansiaList(Request $request)
    {
        // if($request->has('keywords')){
        //     $data = Admin::leftJoin('users', 'users.id', 'admins.user_id')->select('users.*', 'admins.*')
        //     ->where(function ($row) use ($request){
        //             $row->where(function ($query) use ($request) {
        //                 $query->where('users.name', 'like', '%' . $request->keywords . '%')
        //                     ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
        //             });
        //     })->paginate(5);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        // }else{
            $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g' , 'riwayat_gangguan' )->paginate(5);
        // }

      
        Paginator::useBootstrap();
        return $data;
    }

    public static function GangguanList(Request $request)
    {
        // if($request->has('keywords')){
        //     $data = Admin::leftJoin('users', 'users.id', 'admins.user_id')->select('users.*', 'admins.*')
        //     ->where(function ($row) use ($request){
        //             $row->where(function ($query) use ($request) {
        //                 $query->where('users.name', 'like', '%' . $request->keywords . '%')
        //                     ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
        //             });
        //     })->paginate(5);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        // }else{
            $data = R_gangguan::paginate(5);
        // }

      
        Paginator::useBootstrap();
        return $data;
    }
    public static function LansiaStore($params)
    {
        // dd($params);
        // $nilai_imt =  LansiaService::IMT($params['berat_badan'], $params['tinggi_badan']);
        // $nilai_tk =  LansiaService::tekananDarah($params['sistole'], $params['diastole']);

        DB::beginTransaction();
        // try {
            //table lansia
            $inputlansia['name'] = $params['name'];
            $inputlansia['umur'] = $params['umur'];
            $inputlansia['nik'] = $params['nik'];
            $inputlansia['alamat'] = $params['alamat'];
            $inputlansia['gender'] = $params['gender'];
            $inputlansia['desa_id'] = $params['desa_id'];
            //  //table riwayat gangguan
            // $inputRiwayat['user_id'] = $params['petugas_id'];
            // $inputRiwayat['g_ginjal'] = $params['g_ginjal'];
            // $inputRiwayat['g_pengelihatan'] = $params['g_pengelihatan'];
            // $inputRiwayat['g_pendengaran'] = $params['g_pendengaran'];
            // if(isset($params['penyuluhan'])){
            //     $inputRiwayat['penyuluhan'] = $params['penyuluhan'];
            // } 
            // if(isset($params['pemberdayaan'])){
            //     $inputRiwayat['pemberdayaan'] = $params['pemberdayaan'];
            // } 
            // if(isset($params['keterangan'])){
            //     $inputRiwayat['keterangan'] = $params['keterangan'];
            // }
            // // table p__fisik__tindakans
            // $inputFisik['user_id'] = $params['petugas_id'];
            // $inputFisik['tanggal_p'] = $params['tanggal_p'];
            // $inputFisik['berat_badan'] = $params['berat_badan'];
            // $inputFisik['tinggi_badan'] = $params['tinggi_badan'];
            // $inputFisik['imt'] = $nilai_imt;
            // $inputFisik['sistole'] = $params['sistole'];
            // $inputFisik['diastole'] = $params['diastole'];
            // $inputFisik['tekanan_darah'] = $nilai_tk;
            // $inputFisik['user_id'] = $params['petugas_id'];
            
            // if(isset($params['lain'])){
            //     $inputFisik['lain'] = $params['lain'];
            // } 
            // $inputFisik['tata_laksana'] = $params['tata_laksana'];
            // if(isset($params['konseling'])){
            //     $inputFisik['konseling'] = $params['konseling'];
            // } 
            // if(isset($params['rujuk'])){
            //     $inputFisik['rujuk'] = $params['rujuk'];
            // } 
            // // table p3_g_s
            // $inputRiwayat['user_id'] = $params['petugas_id'];
            // if(isset($params['tanggal_p_p3g'])){
            //     $inputP3G['tanggal_p_p3g'] = $params['tanggal_p_p3g'];
            //     $inputP3G['user_id'] = $params['petugas_id'];
            // } 
            // if(isset($params['tingkat_kemandirian'])){
            //     $inputP3G['tingkat_kemandirian'] = $params['tingkat_kemandirian'];
            // } 
            // if(isset($params['g_emosional'])){
            //     $inputP3G['g_emosional'] = $params['g_emosional'];
            // } 
            // if(isset($params['g_kognitiv'])){
            //     $inputP3G['g_kognitiv'] = $params['g_kognitiv'];
            // } 
            // if(isset($params['p_resiko_malnutrisi'])){
            //     $inputP3G['p_resiko_malnutrisi'] = $params['p_resiko_malnutrisi'];
            // } 
            // // $inputP3G['p_resiko_malnutrisi'] = 'A';

            // if(isset($params['p_resiko_jatuh'])){
            //     $inputP3G['p_resiko_jatuh'] = $params['p_resiko_jatuh'];
            // } 
            //  //table p__l_a_b_s
            // if(isset($params['tanggal_p_lab'])){
            //     $inputLabs['tanggal_p_lab'] = $params['tanggal_p_lab'];
            //     $inputLabs['user_id'] = $params['petugas_id'];
            // }
            // if(isset($params['kolesterol'])){
            //     $inputLabs['kolesterol'] = $params['kolesterol'];
            // }
            // if(isset($params['gula_darah'])){
            //     $inputLabs['gula_darah'] = $params['gula_darah'];
            // }
            // if(isset($params['asam_urat'])){
            //     $inputLabs['asam_urat'] = $params['asam_urat'];
            // }
            // if(isset($params['hb'])){
            //     $inputLabs['hb'] = $params['hb'];
            // }

  
            if (isset($params['id'])) {
                // dd($params['id']);
                // dd("edit");
                // dd($params);
                $data =  Lansia::find($params['id']);
                $data->update($inputlansia);
                // $p3g = $data->riwayat_gangguan()->create($inputRiwayat);
                // $p3g = $data->p3g()->create($inputP3G);
                // $p_lab = $data->pemerisaan_lab()->create($inputLabs);
                // $p_f = $data->pemerisaan_fisik_tindakan()->create($inputFisik);
                // dd($data);
                // $petugas =  Lansia::find($params['id']);
                // $petugas->update([]);
                // $user = $petugas->user()->update($inputUser);
            }else{
                $data = Lansia::create($inputlansia);
                // if(isset($params['tanggal_p_p3g'])){
                //     $p3g = $data->p3g()->create($inputP3G); 
                // }
                // if(isset($params['tanggal_p_lab'])){
                //     $p_lab = $data->pemerisaan_lab()->create($inputLabs);
                // }
                // $p3g = $data->riwayat_gangguan()->create($inputRiwayat);
                // $p_f = $data->pemerisaan_fisik_tindakan()->create($inputFisik);

            }
            DB::commit();
        //     return $data;
        // } catch (\Throwable $th) {
        //     DB::rollback();
        //     return $th;
        // }
    }
    public static function LansiaDetail($id)
    {
        $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g' , 'riwayat_gangguan.user')->find($id);
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

    public static function LansiaStoreGangguan($params)
    {
        DB::beginTransaction();
        try {

            $inputRiwayat['user_id'] = $params['user_id'];
            $inputRiwayat['lansia_id'] = $params['lansia_id'];
            $inputRiwayat['g_ginjal'] = $params['g_ginjal'];
            $inputRiwayat['g_pengelihatan'] = $params['g_pengelihatan'];
            $inputRiwayat['g_pendengaran'] = $params['g_pendengaran'];
            if(isset($params['penyuluhan'])){
                $inputRiwayat['penyuluhan'] = $params['penyuluhan'];
            } 
            if(isset($params['pemberdayaan'])){
                $inputRiwayat['pemberdayaan'] = $params['pemberdayaan'];
            } 
            if(isset($params['keterangan'])){
                $inputRiwayat['keterangan'] = $params['keterangan'];
            }
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



    // =============Pemeriksaan fisik dan tindakan===================
    public static function IMT($bb,$tb)
    {
        $nilai =   round($bb/(pow($tb/100,2)),2);
        return $nilai;

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
        $nilai_imt =  LansiaService::IMT($params['berat_badan'], $params['tinggi_badan']);
        $nilai_tk =  LansiaService::tekananDarah($params['sistole'], $params['diastole']);
        $statusGizi =  LansiaService::statusGizi($nilai_imt);
        DB::beginTransaction();
        try {
            $inputFisik['user_id'] = $params['user_id'];
            $inputFisik['lansia_id'] = $params['lansia_id'];
            $inputFisik['tanggal_p'] = $params['tanggal_p'];
            $inputFisik['berat_badan'] = $params['berat_badan'];
            $inputFisik['tinggi_badan'] = $params['tinggi_badan'];
            $inputFisik['imt'] = $nilai_imt;
            $inputFisik['sistole'] = $params['sistole'];
            $inputFisik['diastole'] = $params['diastole'];
            $inputFisik['tekanan_darah'] = $nilai_tk;
            $inputFisik['status_gizi'] = $statusGizi;
            if(isset($params['lain'])){
                $inputFisik['lain'] = $params['lain'];
            } 
            $inputFisik['tata_laksana'] = $params['tata_laksana'];
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



}