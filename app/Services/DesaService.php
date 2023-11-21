<?php

namespace App\Services;

use DB;
use App\Models\Desa;
use App\Models\User;
use App\Models\Admin;
use App\Models\Lansia;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class DesaService
{
    public static function DesaList(Request $request)
    {
        if($request->has('keywords')){
            // $data = Admin::leftJoin('users', 'users.id', 'admins.user_id')->select('users.*', 'admins.*')
            // ->where(function ($row) use ($request){
            //         $row->where(function ($query) use ($request) {
            //             $query->where('users.name', 'like', '%' . $request->keywords . '%')
            //                 ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
            //         });
            // })->paginate(5);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        $data = Desa::where('desas.name', 'like', '%' . $request->keywords . '%')->paginate(5);
        }else{
            $data = Desa::paginate(5);
        }

      
        Paginator::useBootstrap();
        return $data;
    }
    public static function DesaStore($params)
    {
        // dd($params);
        // $username = $params['name'].rand(pow(10, 8 - 1), pow(10, 8) -1);
        DB::beginTransaction();
        try {
            $inputUser['name'] = $params['name'];
            $inputUser['latitude'] = $params['latitude'];
            $inputUser['longitude'] = $params['longitude'];
            if (isset($params['id'])) {
                // dd($params['id']);
                $desa =  Desa::find($params['id']);
                $desa->update($inputUser);
                // $user = $desa->user()->update($inputUser);
            }else{
                // dd($params);
                $desa = Desa::create($inputUser);
                // $admin = $desa->admin()->create([]);
            }
            DB::commit();
            return $desa;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function AdminDetail($id)
    {
        $data = Admin::with('user')->find($id);
        return $data;
    }
    public static function DesaEdit($id)
    {
        
        $data = Desa::find($id);
        // dd($data);
        return $data;
    }
    public static function delete($id)
    {
        $data = Desa::find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }

    public static function totalDesa()
    {
        $data = Desa::count();
        // dd($data);
        return $data;
    }
    public static function DesaLocation()
    {
        // $data = Desa::with('lansia')
        // ->get();
//         SELECT desas.name, desas.latitude, desas.longitude, 
//         SUM(CASE WHEN pemeriksaan_fisikdantindakans.status_gizi = 'Kurang' 
//             THEN 1 ELSE 0 END) AS jumlah_statusgizi_kurang,
//         SUM(CASE WHEN pemeriksaan_fisikdantindakans.status_gizi = 'Normal'
//             THEN 1 ELSE 0 END) AS jumlah_statusgizi_normal,
//         SUM(CASE WHEN pemeriksaan_fisikdantindakans.status_gizi = 'Lebih' 
//             THEN 1 ELSE 0 END) AS jumlah_statusgizi_lebih
        //  FROM pemeriksaan_fisikdantindakans
        //  JOIN desas ON pemeriksaan_fisikdantindakans.desa_id = desas.id
        //  WHERE pemeriksaan_fisikdantindakans.lansia_id 
        //  GROUP BY desas.name, desas.latitude, desas.longitude;

        $data =  DB::table('pemeriksaan_fisikdantindakans')
                ->select('desas.name', 'desas.latitude', 'desas.longitude')
                ->selectRaw('SUM(CASE WHEN pemeriksaan_fisikdantindakans.status_gizi = "Kurang" THEN 1 ELSE 0 END) AS jumlah_statusgizi_kurang')
                ->selectRaw('SUM(CASE WHEN pemeriksaan_fisikdantindakans.status_gizi = "Normal" THEN 1 ELSE 0 END) AS jumlah_statusgizi_normal')
                ->selectRaw('SUM(CASE WHEN pemeriksaan_fisikdantindakans.status_gizi = "Lebih" THEN 1 ELSE 0 END) AS jumlah_statusgizi_lebih')
                ->join('desas', 'pemeriksaan_fisikdantindakans.desa_id', '=', 'desas.id')
                ->groupBy('desas.name', 'desas.latitude', 'desas.longitude')
                ->get();

        return $data;
    }
}