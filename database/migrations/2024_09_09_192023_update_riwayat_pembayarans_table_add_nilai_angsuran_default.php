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
            // Menambahkan nilai default untuk kolom nilai_angsuran
            $table->decimal('nilai_angsuran', 10, 2)->default(0.00)->change(); // Ubah default value sesuai kebutuhan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_pembayarans', function (Blueprint $table) {
            // Menghapus nilai default jika diperlukan
            $table->decimal('nilai_angsuran', 10, 2)->nullable(false)->change(); // Revert changes if needed
        });
    }
};
