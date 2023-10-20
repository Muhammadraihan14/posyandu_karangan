<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;
use App\Services\PetugasService;

class PetugasController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = PetugasService::PetugasList($request);
        return view('admin.petugas.index', compact('data'));
    }
    public function create()
    {
        return view('admin.petugas.form');
    }
    public function edit($id) 
    {
        $data = PetugasService::PetugasEdit($id);

        // dd($data);
        return view('admin.petugas.form', compact('data'));
    }
    public function save(Request $request)
    {
        if(!isset($request['id'])){
            $validated = $request->validate([
                // 'user_name' => 'min:6',
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users',
                'nip' => 'required|min:18|max:18|unique:users',
                'gender' => 'required',
                'image_url' => '',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
                // 'password_confirmation' => 'min:6'
            ]);
            $params = $validated;
        }else{
            $validated = $request->validate([
                'id' => 'required',
                'name' => 'min:3|max:255',
                'email' => 'email:dns',
                'nip' => 'min:18|max:18',
                'gender' => '',
                'image_url' => '',
                'password' => 'same:password_confirmation',
                'password_confirmation' => ''
                // 'password_confirmation' => 'min:6'
            ]);
            $params = $validated;
            // $params = $request->all();
        }        
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $extension = $request->file('image_url')->getClientOriginalName();
            $filenames = time() . '.' . $extension;
            $file->move('upload/', $filenames);
            $params["image_url"] = $filenames;
        }
        $data = PetugasService::PetugasStore($params);
        if(!isset($request['id'])){
            return redirect('petugas')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('petugas')->with('successEdit', 'Berhasil mengedit data');
        }
    }
    public function detail($id)
    {
        $data = PetugasService::PetugasDetail($id);
        return view('admin.petugas.detail',compact('data'));
    }
    
    
    public function delete($id)
    {
        $data = PetugasService::delete($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
}
