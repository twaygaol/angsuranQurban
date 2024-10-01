<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class InstallmentsController extends Controller
{
    public function index()
    {
        $customer = Auth::user(); // Ambil data customer yang sedang login

        // Pastikan relasi 'transaksi' ada di model User atau Customer
        $transaksi = $customer->transaksi; // Mengambil riwayat transaksi customer

        return view('customer.installments.index', compact('transaksi'));
    }
}
