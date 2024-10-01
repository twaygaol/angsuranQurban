<?php

namespace App\Filament\Pages;

use App\Models\Customer;
use Filament\Pages\Page;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CustomerInstallments extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Riwayat Pembayaran';
    protected static ?string $navigationGroup = 'Customer';
    protected static string $view = 'filament.pages.customer-installments';

    public $installments;
    public $customer;

    public function mount()
    {
        // Mengambil data customer_id dari user yang login
        $customerId = Auth::user()->customer_id;

        // Ambil data transaksi yang sudah diverifikasi berdasarkan customer_id
        $this->installments = Transaksi::where('customer_id', $customerId)
            ->where('verifikasi', true) // Hanya ambil transaksi yang sudah diverifikasi
            ->get();

        // Ambil data customer
        $this->customer = Customer::find($customerId);

        if (!$this->customer) {
            $this->customer = (object) [
                'no_hp' => 'Tidak tersedia',
                'alamat' => 'Tidak tersedia',
            ];
        }
    }

    public static function canView(): bool
    {
        return Gate::allows('view', self::class);
    }

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('customer');
    }
}
