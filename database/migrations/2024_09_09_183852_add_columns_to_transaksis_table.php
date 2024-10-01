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
        Schema::table('transaksis', function (Blueprint $table) {
            $table->string('no')->nullable(); // Kolom No
            $table->string('bulan_angsuran')->nullable(); // Kolom Bulan Angsuran
            $table->integer('angsuran_ke')->nullable(); // Kolom Angsuran ke
            $table->decimal('nilai_angsuran', 15, 2)->nullable(); // Kolom Jumlah/Nilai Angsuran
            $table->date('tanggal_pembayaran')->nullable(); // Kolom Tanggal Pembayaran
            $table->boolean('verifikasi')->default(false); // Kolom Verifikasi (x/✓)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropColumn(['no', 'bulan_angsuran', 'angsuran_ke', 'nilai_angsuran', 'tanggal_pembayaran', 'verifikasi']);
        });
    }
};
