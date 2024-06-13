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
        Schema::create('kategori_dokumens', function (Blueprint $table) {
            $table->string('kode_kategori',length:10);
            $table->string('nama_kategori',length:100);
            $table->string('kode_grup',length:10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_dokumens');
    }
};
