<?php

namespace App\Filament\Pages;

use App\Models\Customer;
use App\Models\Pelanggaran;
use App\Models\Prestasi;
use Filament\Pages\Page;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class prestasiKonseling extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?string $navigationLabel = 'Konseling Prestasi';
    protected static ?string $navigationGroup = 'Riwayat Konseling';
    protected static string $view = 'filament.pages.prestasi-konseling';

    public $installments;
    public $violations;

    public function mount()
    {
        // // Mengambil data customer_id dari user yang login
        // $customerId = Auth::user()->customer_id;

        // // Ambil data customer
        // $this->customer = Pelanggaran::find($customerId);


        $siswaId = Auth::user()->customer_id;

        // Ambil data pelanggaran berdasarkan siswa_id
        $this->violations = Prestasi::where('siswa_id', $siswaId)->get();

    }

    public static function canView(): bool
    {
        return Gate::allows('view', self::class);
    }

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('siswa');
    }
}
