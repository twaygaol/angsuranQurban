<?php

namespace App\Filament\Pages;

use App\Models\Customer;
use App\Models\Pelanggaran;
use Filament\Pages\Page;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CustomerInstallments extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';
    protected static ?string $navigationLabel = 'Konseling Pelanggaran';
    protected static ?string $navigationGroup = 'Riwayat Konseling';
    protected static string $view = 'filament.pages.customer-installments';

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
        $this->violations = Pelanggaran::where('siswa_id', $siswaId)->get();

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
