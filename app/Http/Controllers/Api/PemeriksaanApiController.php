<?php

namespace App\Http\Controllers\Api;

use App\Models\P_Fisik_Tindakan;
use Illuminate\Http\Request;
use App\Services\LansiaService;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

class PemeriksaanApiController extends Controller
{
    public function save_fisik(Request $request)
    {
        if(!isset($request['id'])){
            $validated = $request->validate([
                //table p__fisik__tindakans
                'user_id' => 'required',
                'desa_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p' => 'required',
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'sistole' => '',
                'diastole' => '',
                'tata_laksana' => '',
                'konseling' => '',
                'rujuk' => '',
                'lain' => '',

            ]);
            $params = $validated;
        }else{
            $validated = $request->validate([
                //table lansia
                'id' => 'required',
                'user_id' => 'required',
                'desa_id' => 'required',
                'lansia_id' => 'required',
                'tanggal_p' => 'required',
                'tinggi_badan' => 'required',
                'berat_badan' => 'required',
                'sistole' => '',
                'diastole' => '',
                'lain' => '',
                'tata_laksana' => '',
                'konseling' => '',
                'rujuk' => '',
            ]);
            $params = $validated;
        }
            $data = LansiaService::LansiaStoreFisik($params);
            // dd($data);
            if(!isset($request['id'])){
                return  response()->json([
                    "status" => "success",
                    "message" => "Success created pm lansia",
                    "data"      => $data,
                ]);
                }else{
                return   response()->json([
                    "status" => "success",
                    "message" => "Success edit pm lansia",
                    "data"      => $data,
                ]);
                }
    }

    public function delete_fisik($id)
    {
        $data = LansiaService::deleteFisikTindakan($id);
        return response()->json([
            "status" => "success",
            "message" => "Data pm success delete",
            "data"      => $data,
        ]);
    }

    public function detail_fisik($id)
    {
       $data = P_Fisik_Tindakan::find($id);
        return response()->json([
            "status" => "success",
            "message" => "Data detail pm",
            "data"      => $data,
        ]);

    }
}
