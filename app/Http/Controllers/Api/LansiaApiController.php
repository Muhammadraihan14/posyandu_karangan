<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Services\LansiaService;
use App\Http\Controllers\Controller;
// use Symfony\Component\HttpFoundation\Request;

class LansiaApiController extends Controller
{
      
      public function lansiaList()
      {
            $data = LansiaService::lansiaListM();
            return response()->json([
                "status"    => "success",
                "data"   => $data,
            ]);
      }
      public function searchList(Request $request)
      {
            $input = $request->all();
            // dd($input);
            $data = LansiaService::searchLansia($input);
            return response()->json([
                "status"    => "success",
                "message" => "Serch lansia",
                "data"   => $data,
            ]);
      }
      public function detail($id)
      {
        // LansiaController::save();
          $data = LansiaService::LansiaDetail($id);
          return response()->json([
              "status" => "success",
              "message" => "Data Detail lansia",
              "data"      => $data,
          ]);
      }

      public function save(Request $request)
      {
          if(!isset($request['id'])){
            // dd($request);

              $validated = $request->validate([
                  'name' => 'required',
                  'umur' => 'required',
                  'nik' => 'required|max:16|min:16',
                  'umur' => 'required|max:3',
                  'gender' => 'required',
                  'alamat' => 'required',
                  'desa_id' => 'required',
              ]);
              $params = $validated;
            //   dd($params);
          }else{
              $validated = $request->validate([
                  'id' => 'required',
                  'name' => 'required',
                  'nik' => 'required|max:16|min:16',
                  'umur' => 'required|max:3',
                  'gender' => 'required',
                  'alamat' => 'required',
                  'desa_id' => 'required',
              ]);
              $params = $validated;
          }        
          $data = LansiaService::LansiaStore($params);
          if(!isset($request['id'])){
            //   return redirect('lansia')->with('success', 'Berhasil menambahkan data');
            return  response()->json([
                "status" => "success ",
                "message" => "Success created lansia",
                "data"      => $data,
            ]);
          }else{
            //   return redirect('lansia')->with('successEdit', 'Berhasil mengedit data');
            return   response()->json([
                "status" => "success",
                "message" => "Success edit lansia",
                "data"      => $data,
            ]);
          }
        }

      public function delete($id)
      {
          $data = LansiaService::deleteLansia($id);
            return response()->json([
                "status" => "success",
                "message" => "Data lansia success delete",
                "data"      => $data,
            ]);
      }

}
