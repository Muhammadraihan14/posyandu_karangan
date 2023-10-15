<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BlogService;
use App\Services\DesaService;
use App\Charts\StatusGiziChart;
use App\Services\LansiaService;
use App\Services\PetugasService;
use App\Charts\JenisKelaminChart;
use App\Charts\KunjunganLansiaChart;

class DashboardController extends Controller
{
    public function index(KunjunganLansiaChart  $chart, 
                            JenisKelaminChart $JKchart, 
                            StatusGiziChart $STchart)
    {

        $data['klChart'] =  $chart->build();
        $data['jkChart'] =  $JKchart->build();
        $data['stChart'] =  $STchart->build();
        $TLansia = LansiaService::totalLansia();
        $TBlog = BlogService::totalBlog();
        $TDesa = DesaService::totalDesa();
        $TPetugas = PetugasService::totalPetugas();
        // dd($data);

        

        // dd($data);

        
        return view('admin.dashboard.index', compact('TLansia','TBlog','TDesa','TPetugas','data'));
    }
}
