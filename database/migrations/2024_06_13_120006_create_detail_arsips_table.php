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
        Schema::create('detail_arsips', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pelaksana',length:10);
            $table->string('kode_unit',length:10);
            $table->string('kode_kategori',length:10);
            $table->string('no_referensi',length:50);
            $table->string('perihal');
            $table->text('nama_dokumen');
            $table->date('tanggal_rilis');
            $table->date('tanggal_selesai');
            $table->enum('tingkat_perkembangan', ['Asli', 'Copy']);
            $table->enum('media_simpan',['Kertas','Hard Disk','Foto']);
            $table->enum('kondisi',['Baik','Kurang Baik','Rusak']);
            $table->enum('status',['Aktif','Inaktif']);
            $table->string('nobox',length:25);
            $table->string('kode_penyimpanan',length:10);
            $table->string('lokasi_penyimpanan',length:25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_arsips');
    }
};
