<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\Petugas;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;



class PetugasService
{
    public static function PetugasList($request)
    {

        if($request->has('keywords')){
            $data = Petugas::leftJoin('users', 'users.id', 'petugas.user_id')->select('users.*', 'petugas.*')
            ->where(function ($row) use ($request){
                    $row->where(function ($query) use ($request) {
                        $query->where('users.name', 'like', '%' . $request->keywords . '%')
                            ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
                    });
            })->paginate(5);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        }else{
            $data = Petugas::paginate(5);

        }

        Paginator::useBootstrap();
        return $data;
    }
    public static function PetugasStore($params)
    {
        // dd($params);
        $username = $params['name'].rand(pow(10, 8 - 1), pow(10, 8) -1);
        DB::beginTransaction();
        try {
            $inputUser['user_name'] = $username;
            $inputUser['user_type'] = 'petugas';
            $inputUser['name'] = $params['name'];
            $inputUser['email'] = $params['email'];
            $inputUser['nip'] = $params['nip'];
            $inputUser['gender'] = $params['gender'];
            $inputUser['password'] = Hash::make($params['password']);
            if(isset($params['image_url'])){
                $inputUser['image_url'] = $params['image_url'];
            }   
            if (isset($params['id'])) {
                // dd("edit");
                $petugas =  Petugas::find($params['id']);
                // dd($petugas);
                $petugas->update([]);
                $user = $petugas->user()->update($inputUser);
            }else{
                $user = User::create($inputUser);
                $petugas = $user->petugas()->create([]);
            }
            DB::commit();
            return $user;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function PetugasDetail($id)
    {
        $data = Petugas::with('user')->find($id);
        return $data;
    }
    public static function PetugasEdit($id)
    {
        $data = Petugas::with('user')->find($id);
        return $data;
    }
    public static function delete($id)
    {
        $data = Petugas::with('user')->find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}