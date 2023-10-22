<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = AdminService::adminList($request);
        return view('admin.admin.index', compact('data'));
    }
    public function create()
    {
        return view('admin.admin.form');
    }
    public function edit($id) 
    {
        $data = AdminService::AdminEdit($id);
        // dd($data);

        // dd($data);
        return view('admin.admin.form', compact('data'));
    }    
    public function save(Request $request)
    {
        if(!isset($request['id'])){
            $validated = $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users',
                'nip' => 'required|min:18|max:18|unique:users',
                'gender' => 'required',
                'image_url' => '',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
            $params = $validated;
            // dd($params);
        }else{
            $params = $request->all();
        }        
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $extension = $request->file('image_url')->getClientOriginalName();
            $filenames = time() . '.' . $extension;
            $file->move('upload/', $filenames);
            $params["image_url"] = $filenames;
        }
        $data = AdminService::AdminStore($params);
        if(!isset($request['id'])){
            return redirect('admin')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('admin')->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function detail($id)
    {
        $data = AdminService::AdminDetail($id);
        return view('admin.admin.detail',compact('data'));
    }
    
    
    public function delete($id)
    {
        $data = AdminService::delete($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }

    public function me()
    {
        $data = Auth::user();
        return view('admin.me', compact('data'));
    }
}
