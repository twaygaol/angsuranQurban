<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\ChartWidget;

class CustomerChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Pelanggan Bulanan';

    protected function getData(): array
    {
        // Mengambil data pelanggan berdasarkan bulan
        $customerData = Customer::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->get();

        // Menyusun data untuk chart
        $labels = $customerData->pluck('bulan')->map(function($bulan) {
            return date('F', mktime(0, 0, 0, $bulan, 10)); // Nama bulan
        })->toArray();

        $values = $customerData->pluck('total')->toArray();

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Jumlah Pelanggan',
                    'data' => $values,
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie'; // Tipe chart yang digunakan
    }
}
