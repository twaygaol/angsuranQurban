<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_hp',
        'email',
        'alamat',
        'nomor_kontrak',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'customer_id');
    }
}
