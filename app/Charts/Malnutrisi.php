<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use DB;

class Malnutrisi
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {


        
        $statusTinggi = DB::table('pemeriksaan_p3gs')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_p3gs.lansia_id) AS jumlah_tinggi'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_p3gs GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_p3gs.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_p3gs.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_p3gs.p_resiko_malnutrisi', '=', 'Malnutrisi')->pluck('jumlah_tinggi');

        $statusNormal = DB::table('pemeriksaan_p3gs')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_p3gs.lansia_id) AS jumlah_normal'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_p3gs GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_p3gs.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_p3gs.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_p3gs.p_resiko_malnutrisi', '=', 'Normal')->pluck('jumlah_normal');

        $statusRendah = DB::table('pemeriksaan_p3gs')
        ->select(DB::raw('COUNT(DISTINCT pemeriksaan_p3gs.lansia_id) AS jumlah_rendah'))
        ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_p3gs GROUP BY lansia_id) latest'),
             function ($join) 
             {
                $join->on('pemeriksaan_p3gs.lansia_id', '=', DB::raw('latest.lansia_id'))->on('pemeriksaan_p3gs.created_at', '=', DB::raw('latest.max_timestamp'));
             })
        ->where('pemeriksaan_p3gs.p_resiko_malnutrisi', '=', 'Resiko Malnutrisi')->pluck('jumlah_rendah');

        $data = [
            $statusTinggi[0],
            $statusNormal[0],
            $statusRendah[0]
        ];
        // dd($data);

        $label = [
            'Malnutrisi',
            'Normal',
            'Resiko Malnutrisi'
        ];


        
        return $this->chart->pieChart()
                ->setTitle('Grafik Status Gizi Lansia')
                ->setSubtitle(date('Y'))
                ->addData($data)
                ->setColors([ '#FF0000','#58FFC5', '#FFFF00'])
                ->setLabels($label);
    }
}
