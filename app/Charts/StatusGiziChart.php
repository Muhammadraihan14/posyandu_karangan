<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\P_Fisik_Tindakan;
use DB;

class StatusGiziChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        // SELECT COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_normal
        // FROM pemeriksaan_fisikdantindakans 
        // INNER JOIN (
        //     SELECT lansia_id, MAX(created_at) AS max_timestamp
        //     FROM pemeriksaan_fisikdantindakans
        //     GROUP BY lansia_id
        // ) latest ON pemeriksaan_fisikdantindakans.lansia_id = latest.lansia_id AND pemeriksaan_fisikdantindakans.created_at = latest.max_timestamp
        // WHERE pemeriksaan_fisikdantindakans.status_gizi = 'Normal';



        $statusTinggi = DB::table('pemeriksaan_fisikdantindakans')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_tinggi'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_fisikdantindakans GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_fisikdantindakans.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_fisikdantindakans.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_fisikdantindakans.status_gizi', '=', 'Lebih')->pluck('jumlah_tinggi');
        // dd($statusTinggi);



        
        $statusNormal = DB::table('pemeriksaan_fisikdantindakans')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_normal'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_fisikdantindakans GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_fisikdantindakans.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_fisikdantindakans.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_fisikdantindakans.status_gizi', '=', 'Normal')->pluck('jumlah_normal');

        $statusRendah = DB::table('pemeriksaan_fisikdantindakans')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_fisikdantindakans.lansia_id) AS jumlah_rendah'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_fisikdantindakans GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_fisikdantindakans.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_fisikdantindakans.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_fisikdantindakans.status_gizi', '=', 'Kurang')->pluck('jumlah_rendah');

        $data = [
            $statusTinggi[0],
            $statusNormal[0],
            $statusRendah[0]
        ];
        // dd($data);

        $label = [
            'Tinggi',
            'Normal',
            'Rendah'
        ];
        return $this->chart->donutChart()
            ->setTitle('Grafik Status Gizi Lansia')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setColors([ '#FF0000','#58FFC5', '#FFFF00'])
            ->setLabels($label);
    }
}
