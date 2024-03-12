<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sensor;
use App\Events\SensorEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    public function simpan($nilaiTinggi, $nilaiBerat, $imt)
    {
        // $data = DB::table('sensors');
        $tgl = Carbon::now();
        // $data->insert([
        //     "berat_badan" => $nilaiBerat,
        //     "tinggi_badan" => $nilaiTinggi,
        //     "created_at" => $tgl,
        //     "updated_at" => $tgl,
        // ]);

    $data = Sensor::where('id', '1')->update([
        "berat_badan" => $nilaiBerat,
        "tinggi_badan" => $nilaiTinggi,
        "created_at" => $tgl,
        "updated_at" => $tgl,
    ]);

    return event(new SensorEvent($nilaiBerat, $nilaiTinggi,$imt));


    }
}
