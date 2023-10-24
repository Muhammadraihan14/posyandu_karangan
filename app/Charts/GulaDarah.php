<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\P_LAB;

class GulaDarah
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $status = P_LAB::get();

        $statusNormal = P_LAB::where('gula_darah', '<', '200')
        ->distinct('lansia_id')
        ->count();
        $statusTinggi = P_LAB::where('gula_darah', '>=', '200')
        ->distinct('lansia_id')
        ->count();


        $data = [
            $statusNormal,
            $statusTinggi,
        ];
        // dd($data);
        $label = [
            'Normal',
            'Tinggi'
        ];
        return $this->chart->pieChart()
        ->setTitle('Grafik Gula Darah Lansia')
        ->setSubtitle(date('Y'))
        ->addData($data)
        ->setColors(['#58FFC5', '#FF0000'])
        ->setLabels($label);
    }
}
