<?php

namespace App\Services;

use DB;
use File;
use App\Models\Blog;
use App\Models\User;
use App\Models\Petugas;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;




class BlogService
{
    public static function BlogList($request)
    {
        $data = Blog::with('user')->paginate(5);
        Paginator::useBootstrap();
        return $data;
    }
    public static function BlogStore($params)
    {
        DB::beginTransaction();
        try {
 
            // $inputUser['judul'] = $params['judul'];
            // $inputUser['isi'] = $params['isi'];
            // // $inputUser['image_url'] = $params['image_url'];
            $inputUser['creator_id'] = $params['user_id'];
            if(isset($params['image_url'])){
                $inputUser['image_url'] = $params['image_url'];
            } 
            if(isset($params['judul'])){
                $inputUser['judul'] = $params['judul'];
            } 
            if(isset($params['isi'])){
                $inputUser['isi'] = $params['isi'];
            } 
            if (isset($params['id'])) {
                // dd("edit");
                $petugas =  Blog::find($params['id']);
                if(isset($params['image_url'])){
                    File::delete(asset('upload'.$petugas->image_url));
                }
                // dd($petugas->image_url);
                // $petugas->update([]);

                $blog = $petugas->update($inputUser);
            }else{
                // dd("Error");
                $blog = Blog::create($inputUser);
                // $petugas = $blog->user()->create([]);
            }
            DB::commit();
            return $blog;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function BlogDetail($id)
    {
        $data = Petugas::with('user')->find($id);
        return $data;
    }
    public static function BlogEdit($id)
    {
        $data = Blog::with('user')->find($id);
        return $data;
    }
    public static function delete($id)
    {
        $data = Blog::find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }


    public static function totalBlog()
    {
        $data = Blog::count();
        // dd($data);
        return $data;
    }
}