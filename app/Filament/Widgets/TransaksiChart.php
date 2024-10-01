<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Transaksi;

class TransaksiChart extends ChartWidget
{
    protected static ?string $heading = 'Transaksi Bulanan';

    protected function getData(): array
    {
        // Ambil data transaksi berdasarkan bulan
        $transaksiData = Transaksi::selectRaw('MONTH(tanggal_pembayaran) as bulan, SUM(nilai_angsuran) as total')
            ->groupBy('bulan')
            ->get();

        // Extract data untuk chart
        $labels = $transaksiData->pluck('bulan')->map(function($bulan) {
            return date('F', mktime(0, 0, 0, $bulan, 10)); // Nama bulan
        })->toArray();

        $values = $transaksiData->pluck('total')->toArray();

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Nilai Angsuran Bulanan',
                    'data' => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.6)',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
