<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Pelanggaran;
use App\Models\Prestasi;
use App\Models\Transaksi;
use App\Models\Walikelas;

class StatsOverview extends BaseWidget
{

    protected static ?string $pollingInterval = null ;

    protected function getStats(): array

    {
        return [
         Stat::make('Total Konseling Pelanggaran', Pelanggaran::count())
            ->description('Data kesuluhan Konseling')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('primary')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
         Stat::make('Total Konseling Prestasi', Prestasi::count())
            ->description('Data keseluruhan Yang masuk')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('danger')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),

        ];
    }

}
