<?php

namespace App\Charts;

use App\Models\Desa;
use App\Models\Lansia;
use App\Models\P_Fisik_Tindakan;
use DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KunjunganLansiaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }
    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $total = P_Fisik_Tindakan::select(DB::raw("COUNT(tanggal_p) as total"))
        ->GroupBy(DB::raw("MONTH(tanggal_p)"))->pluck('total')->toArray();
        $bulan = P_Fisik_Tindakan::select(DB::raw("MONTHNAME(tanggal_p) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(tanggal_p)"))->pluck('bulan')->toArray();
        return $this->chart->lineChart()
            ->setTitle('Grafik Jumlah Kunjungan Lansia.')
            ->setSubtitle(date('Y'))
            ->addData('Kunjungan',  $total)
            ->setHeight(400)
            ->setXAxis($bulan);
    }
}
