<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\P_Fisik_Tindakan;
use DB;


class TekananDarah
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $statusTinggi = DB::table('pemeriksaan_fisikdantindakans')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_tinggi'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_fisikdantindakans GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_fisikdantindakans.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_fisikdantindakans.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_fisikdantindakans.tekanan_darah', '=', 'Tinggi')->pluck('jumlah_tinggi');

        $statusNormal = DB::table('pemeriksaan_fisikdantindakans')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_normal'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_fisikdantindakans GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_fisikdantindakans.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_fisikdantindakans.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_fisikdantindakans.tekanan_darah', '=', 'Normal')->pluck('jumlah_normal');

        $statusRendah = DB::table('pemeriksaan_fisikdantindakans')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_rendah'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_fisikdantindakans GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_fisikdantindakans.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_fisikdantindakans.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_fisikdantindakans.tekanan_darah', '=', 'Rendah')->pluck('jumlah_rendah');




        // $statusTinggi = P_Fisik_Tindakan::where('tekanan_darah', 'Tinggi')
        // ->distinct('lansia_id')
        // ->count();
        // $statusNormal = P_Fisik_Tindakan::where('tekanan_darah', 'Normal')
        // ->distinct('lansia_id')
        // ->count();
        // $statusRendah = P_Fisik_Tindakan::where('tekanan_darah', 'Rendah')
        // ->distinct('lansia_id')
        // ->count();



        // $status = P_Fisik_Tindakan::get();
        $data = [
            $statusTinggi->first(),
            $statusNormal->first(),
            $statusRendah->first()
        ];
        // dd($data);

        $label = [
            'Tinggi',
            'Normal',
            'Rendah'
        ];
        return $this->chart->donutChart()
            ->setTitle('Grafik Tekanan Darah Lansia')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setColors([ '#FF0000','#58FFC5', '#FFFF00'])
            ->setLabels($label);
    }
}
