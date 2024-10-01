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
            $table->integer('angsuran_ke')->default(0)->change(); // Set default value or remove if NULL is allowed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_pembayarans', function (Blueprint $table) {
            $table->integer('angsuran_ke')->nullable(false)->change(); // Revert changes if needed
        });
    }
};
