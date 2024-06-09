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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_penjualan');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->unsignedBigInteger('id_karyawan');
            $table->foreign('id_karyawan')->references('id')->on('karyawan');
            $table->unsignedBigInteger('id_gitar');
            $table->foreign('id_gitar')->references('id')->on('gitar');
            $table->decimal('total_penjualan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
