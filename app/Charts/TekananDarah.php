<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\P_Fisik_Tindakan;


class TekananDarah
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $status = P_Fisik_Tindakan::get();
        $data = [
            $status->where('tekanan_darah', 'Tinggi')->count(),
            $status->where('tekanan_darah', 'Normal')->count(),
            $status->where('tekanan_darah', 'Rendah')->count(),
        ];

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
