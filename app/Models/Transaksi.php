<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'no',
        'bulan_angsuran',
        'angsuran_ke',
        'nilai_angsuran',
        'tanggal_pembayaran',
        'verifikasi',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
