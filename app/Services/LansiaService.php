<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Lansia;
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
            $data = Lansia::paginate(5);
        // }

      
        Paginator::useBootstrap();
        return $data;
    }
    public static function LansiaStore($params)
    {
        // dd($params);
        DB::beginTransaction();
        // try {
            //table lansia

            $inputlansia['petugas_id'] = $params['petugas_id'];
            $inputlansia['name'] = $params['name'];
            $inputlansia['umur'] = $params['umur'];
            $inputlansia['nik'] = $params['nik'];
            $inputlansia['alamat'] = $params['alamat'];
            $inputlansia['gender'] = $params['gender'];
            $inputlansia['desa_id'] = $params['desa_id'];
            $inputlansia['g_ginjal'] = $params['g_ginjal'];
            $inputlansia['g_pengelihatan'] = $params['g_pengelihatan'];
            $inputlansia['g_pendengaran'] = $params['g_pendengaran'];
            if(isset($params['penyuluhan'])){
                $inputlansia['penyuluhan'] = $params['penyuluhan'];
            } 
            if(isset($params['pemberdayaan'])){
                $inputlansia['pemberdayaan'] = $params['pemberdayaan'];
            } 
            if(isset($params['keterangan'])){
                $inputlansia['keterangan'] = $params['keterangan'];
            }
            $inputlansia['keterangan'] = $params['keterangan'];

            // table p__fisik__tindakans
            $inputFisik['tanggal_p'] = $params['tanggal_p'];
            $inputFisik['berat_badan'] = $params['berat_badan'];
            $inputFisik['tinggi_badan'] = $params['tinggi_badan'];
            $inputFisik['imt'] = 12.2;
            $inputFisik['sistole'] = $params['sistole'];
            $inputFisik['diastole'] = $params['diastole'];
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
            // table p3_g_s
            if(isset($params['tanggal_p_p3g'])){
                $inputP3G['tanggal_p_p3g'] = $params['tanggal_p_p3g'];
            } 
            if(isset($params['tingkat_kemandirian'])){
                $inputP3G['tingkat_kemandirian'] = $params['tingkat_kemandirian'];
            } 
            if(isset($params['g_emosional'])){
                $inputP3G['g_emosional'] = $params['g_emosional'];
            } 
            if(isset($params['g_kognitiv'])){
                $inputP3G['g_kognitiv'] = $params['g_kognitiv'];
            } 
            if(isset($params['p_resiko_malnutrisi'])){
                $inputP3G['p_resiko_malnutrisi'] = $params['p_resiko_malnutrisi'];
            } 
            // $inputP3G['p_resiko_malnutrisi'] = 'A';

            if(isset($params['p_resiko_jatuh'])){
                $inputP3G['p_resiko_jatuh'] = $params['p_resiko_jatuh'];
            } 
             //table p__l_a_b_s
            if(isset($params['tanggal_p_lab'])){
                $inputLabs['tanggal_p_lab'] = $params['tanggal_p_lab'];
            }
            if(isset($params['kolesterol'])){
                $inputLabs['kolesterol'] = $params['kolesterol'];
            }
            if(isset($params['gula_darah'])){
                $inputLabs['gula_darah'] = $params['gula_darah'];
            }
            if(isset($params['asam_urat'])){
                $inputLabs['asam_urat'] = $params['asam_urat'];
            }
            if(isset($params['hb'])){
                $inputLabs['hb'] = $params['hb'];
            }

  
            if (isset($params['id'])) {
                // dd($params['id']);
                $petugas =  Admin::find($params['id']);
                $petugas->update([]);
                $user = $petugas->user()->update($inputUser);
            }else{
                // dd("di c");
                $data = Lansia::create($inputlansia);
                $p3g = $data->p3g()->create($inputP3G);
                $p_lab = $data->pemerisaan_lab()->create($inputLabs);
                $p_f = $data->pemerisaan_fisik_tindakan()->create($inputFisik);

            }
            DB::commit();
            return $data;
        // } catch (\Throwable $th) {
        //     DB::rollback();
        //     return $th;
        // }
    }
    public static function AdminDetail($id)
    {
        $data = Admin::with('user')->find($id);
        return $data;
    }
    public static function LansiaEdit($id)
    {
        // dd("edit");
        $data = Lansia::with('pemerisaan_fisik_tindakan','pemerisaan_lab','p3g')->find($id);
        return $data;
    }
    public static function delete($id)
    {
        $data = Admin::with('user')->find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}