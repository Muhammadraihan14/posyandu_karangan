<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\P_Fisik_Tindakan;

class StatusGiziChart
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
            $status->where('status_gizi', 'Kurang')->count(),
            $status->where('status_gizi', 'Normal')->count(),
            $status->where('status_gizi', 'Lebih')->count(),
        ];

        $label = [
            'Kurang',
            'Normal',
            'Lebih'
        ];
        return $this->chart->donutChart()
            ->setTitle('Grafik Status Gizi Lansia')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
