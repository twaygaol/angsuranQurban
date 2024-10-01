<?php

namespace App\Filament\Resources\AngsuranResource\Pages;

use App\Filament\Resources\AngsuranResource;
use App\Models\Transaksi;
use Filament\Resources\Pages\ViewRecord;

class ViewAngsuran extends ViewRecord
{
    protected static string $resource = AngsuranResource::class;

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Ambil semua transaksi berdasarkan customer_id
        return Transaksi::query()
            ->where('customer_id', $this->record->customer_id); // Mengambil semua transaksi dari customer yang dipilih
    }
}
