<?php

namespace App\Charts;
use App\Models\P_LAB;
use App\Services\LansiaService;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use DB;
class AsamUrat
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
       
    //   $status = P_LAB::get();

      $statusNormal = DB::table('pemeriksaan_labs')
            ->select(DB::raw('COUNT(DISTINCT pemeriksaan_labs.lansia_id) AS jumlah_normal'))
            ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_labs GROUP BY lansia_id) latest'), function ($join) {
                $join->on('pemeriksaan_labs.lansia_id', '=', DB::raw('latest.lansia_id'))
                    ->on('pemeriksaan_labs.created_at', '=', DB::raw('latest.max_timestamp'));
            })
            ->where('pemeriksaan_labs.status_asam_urat', '=', 'Normal')->pluck('jumlah_normal');

      $statusTinggi = DB::table('pemeriksaan_labs')
            ->select(DB::raw('COUNT(DISTINCT pemeriksaan_labs.lansia_id) AS jumlah_tinggi'))
            ->join(DB::raw('(SELECT lansia_id, MAX(created_at) AS max_timestamp
            FROM pemeriksaan_labs GROUP BY lansia_id) latest'), function ($join) {
                $join->on('pemeriksaan_labs.lansia_id', '=', DB::raw('latest.lansia_id'))
                    ->on('pemeriksaan_labs.created_at', '=', DB::raw('latest.max_timestamp'));
            })
            ->where('pemeriksaan_labs.status_asam_urat', '=', 'Tinggi')->pluck('jumlah_tinggi');




      $data = [
            $statusNormal->first(),
            $statusTinggi->first()
        ];

        $label = [
            'Normal',
            'Tinggi'
        ];

        
        return $this->chart->pieChart()
            ->setTitle('Grafik Asam Urat Lansia')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setColors(['#58FFC5', '#FF0000'])
            ->setLabels($label);
    }
}
