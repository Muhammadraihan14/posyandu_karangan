<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Petugas;
use App\Charts\AsamUrat;
use App\Charts\GulaDarah;
use App\Charts\Kolesterol;
use App\Charts\TekananDarah;
use Illuminate\Http\Request;
use App\Services\BlogService;
use App\Charts\StatusGiziChart;
use App\Charts\JenisKelaminChart;
use Illuminate\Pagination\Paginator;

class LandingController extends Controller
{
    public function index(
    JenisKelaminChart $JKchart, 
    StatusGiziChart $STchart,
    GulaDarah $GDchart,
    Kolesterol $KOchart,
    AsamUrat $ASchart,
    TekananDarah $TKchart,
    
    
    
    )
    {
        $data['jkChart'] =  $JKchart->build();
        $data['stChart'] =  $STchart->build();
        $data['gdChart'] =  $GDchart->build();
        $data['koChart'] =  $KOchart->build();
        $data['asChart'] =  $ASchart->build();
        $data['tkChart'] =  $TKchart->build();

        
        $blog = Blog::with('user')->paginate(12);
        $blg = Blog::with('user')->limit(6)->get();
        Paginator::useBootstrap();
        $petugas = Petugas::with('user')->get();
        // dd($petugas);
        return view('welcome', compact('blog', 'blg','petugas','data'));
    }
    public function blog(Request $request)
    {
        $blog = Blog::with('user')->paginate(9);
        // $blg = Blog::with('user')->limit(6)->get();
        Paginator::useBootstrap();
        return view('landing.blog.listblog', compact('blog'));
    }


    public function detail($id)
    {
        $data = Blog::with('user')->find($id);
        return view('landing.blog.detail', compact('data'));
    }
    
}
