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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp'); // Mengubah 'no_telepon' menjadi 'no_hp'
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('nomor_kontrak')->unique(); // Mengubah 'kode_pembelian' menjadi 'nomor_kontrak'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
