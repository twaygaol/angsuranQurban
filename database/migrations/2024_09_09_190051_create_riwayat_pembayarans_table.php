<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_pembayarans', function (Blueprint $table) {
            $table->id();
            // Menghubungkan ke kolom 'id' dari tabel 'transaksis'
            $table->foreignId('transaksi_id')->constrained('transaksis')->onDelete('cascade');
            $table->integer('angsuran_ke');
            $table->decimal('nilai_angsuran', 10, 2);
            $table->date('tanggal_pembayaran');
            $table->boolean('verifikasi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pembayarans');
    }
};
