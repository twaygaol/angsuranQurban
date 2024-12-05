<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $table = 'prestasis'; // Nama tabel
    protected $fillable = [
        'siswa_id',
        'prestasi',
        'tanggal',
        'catatan',
        'keterangan',
    ];

    /**
     * Relasi ke model Siswa.
     * Satu prestasi dimiliki oleh satu siswa.
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    protected $casts = [
        'tanggal' => 'date', // or 'datetime' if it includes a time
    ];
}
