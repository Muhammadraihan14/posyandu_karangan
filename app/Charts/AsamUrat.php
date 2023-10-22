<?php

namespace App\Charts;
use App\Models\P_LAB;
use App\Services\LansiaService;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class AsamUrat
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
       
      $status = P_LAB::get();
      $data = [
            $status->where('status_asam_urat', 'Normal')->count(),
            $status->where('status_asam_urat', 'Tinggi')->count(),
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
