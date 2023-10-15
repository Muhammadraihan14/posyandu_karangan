<?php

namespace App\Charts;

use App\Models\Desa;
use App\Models\Lansia;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JenisKelaminChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $desa = Desa::get();
        $lansia = Lansia::get();
        $data = [
            $lansia->where('gender', 'pria')->count(),
            $lansia->where('gender', 'wanita')->count(),
        ];

        $label = [
            'pria',
            'wanita'
        ];
        // $Lansia = Lansia:get();
        return $this->chart->pieChart()
            ->setTitle('Grafik Jenis Kelamin Lansia')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
