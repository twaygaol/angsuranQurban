<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // Menambahkan kolom 'customer_id' dengan foreign key constraint
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            // Menghapus foreign key constraint dan kolom 'customer_id'
            $table->dropForeign(['customer_id']);
            $table->dropColumn('customer_id');
        });
    }
};
