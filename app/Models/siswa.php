<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas'; // Nama tabel
    protected $fillable = [
        'nisn',
        'nama',
        'kelas_id',
    ];

    /**
     * Relasi ke model Kelas.
     * Satu siswa hanya memiliki satu kelas.
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id'); // Sesuaikan dengan nama foreign key yang benar
    }

    /**
     * Relasi ke model Pelanggaran.
     * Satu siswa bisa memiliki banyak pelanggaran.
     */
    public function pelanggarans()
    {
        return $this->hasMany(Pelanggaran::class);
    }

    /**
     * Relasi ke model Prestasi.
     * Satu siswa bisa memiliki banyak prestasi.
     */
    public function prestasis()
    {
        return $this->hasMany(Prestasi::class);
    }
}
