<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPembayaran extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pembayarans';

    protected $fillable = [
        'transaksi_id',
        'angsuran_ke',
        'nilai_angsuran',
        'tanggal_pembayaran',
        'verifikasi',
    ];

    // Relasi ke model Transaksi
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
