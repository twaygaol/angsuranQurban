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
        Schema::table('riwayat_pembayarans', function (Blueprint $table) {
            // Menambahkan nilai default untuk kolom tanggal_pembayaran
            $table->timestamp('tanggal_pembayaran')->useCurrent()->change(); // Ubah default value sesuai kebutuhan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_pembayarans', function (Blueprint $table) {
            // Menghapus nilai default jika diperlukan
            $table->timestamp('tanggal_pembayaran')->nullable()->change(); // Revert changes if needed
        });
    }
};
