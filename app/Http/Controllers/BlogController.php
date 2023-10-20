<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = BlogService::BlogList($request);
        // dd($data);

        return view('admin.blog.index', compact('data'));
    }
    public function create()
    {
        return view('admin.blog.form');
    }
    public function edit($id) 
    {
        $data = BlogService::BlogEdit($id);
        // dd($data);

        // dd(asset($data->image_url));
        return view('admin.blog.form', compact('data'));
    }
    public function detail($id)
    {
        $data = Blog::with('user')->find($id);

        // dd($data);
        return view('admin.blog.detail', compact('data'));
    }
    public function save(Request $request)
    {
        
        if(!isset($request['id'])){
            // dd('c');
        // dd($request);

            $validated = $request->validate([
                'judul' => 'required',
                'user_id' => 'required',
                'image_url' => 'required',
                'isi' => 'required',
            ]);
            $params = $validated;
            // dd($request);

        }else{
            // dd("edit");
            $validated = $request->validate([
                'id'=>'required',
                'user_id' => 'required',
                'judul' => '',
                'image_url' => '',
                'isi' => '',
            ]);
            $params = $validated;
            // dd($params);
        }     
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $extension = $request->file('image_url')->getClientOriginalName();
            $filenames = time() . '.' . $extension;
            $file->move('upload/', $filenames);
            $params["image_url"] = $filenames;
        }
        $data = BlogService::BlogStore($params);
        if(!isset($request['id'])){
            return redirect('blog')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('blog')->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function delete($id)
    {
        $data = BlogService::delete($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
}
