<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallmentsController;
use App\Filament\Resources\AngsuranResource\Pages\ShowAngsuran;
use App\Filament\Resources\AngsuranResource\Pages\ViewAngsuran;

Route::get('/', function () {
    return view('home');
});
Route::get('/transaksi/{record}', ViewAngsuran::class)->name('transaksi.show');

Route::middleware(['auth', 'role:Customer'])->group(function () {
    Route::get('/customer/installments', [InstallmentsController::class, 'index'])
        ->name('customer.installments');
});
