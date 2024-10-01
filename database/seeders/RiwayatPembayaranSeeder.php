<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPembayaranSeeder extends Seeder
{
    /**
     * Seed the database with initial data.
     */
    public function run()
    {
        DB::table('riwayat_pembayarans')->insert([
            [
                'transaksi_id' => 1,
                'angsuran_ke' => 1,
                'nilai_angsuran' => 500000.00, // Pastikan kolom ini diisi
                'tanggal_pembayaran' => now(),
                'verifikasi' => true,
            ],
            // Tambahkan lebih banyak data default jika diperlukan
        ]);
    }
}

