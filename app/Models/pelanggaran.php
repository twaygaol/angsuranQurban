<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $table = 'pelanggarans'; // Nama tabel
    protected $fillable = [
        'siswa_id',
        'jenis_pelanggaran',
        'tanggal',
        'catatan',
        'keterangan',
    ];

    /**
     * Relasi ke model Siswa.
     * Satu pelanggaran dimiliki oleh satu siswa.
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

}
