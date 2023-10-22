<?php

namespace App\Charts;
use App\Models\P_LAB;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class Kolesterol
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {

        $status = P_LAB::get();
        $data = [
            $status->where('kolesterol', '<', '190')->count(),
            $status->where('kolesterol', '>=', '190')->count(),
        ];
        // dd($data);
        $label = [
            'Normal',
            'Tinggi'
        ];



        return $this->chart->donutChart()
            ->setTitle('Grafik Kolesterol Lansia')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setColors(['#58FFC5', '#FF0000'])
            ->setLabels($label);
    }
}
