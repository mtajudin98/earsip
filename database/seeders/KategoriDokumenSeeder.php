<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KategoriDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('kategori_dokumens')->insert([
            [
                'kode_kategori' => 'K01',
                'nama_kategori'=>'Jurnal',
                'kode_group'=>'G01',
                'masa_retensi'=>'10',
                'created_at' => $now, 'updated_at' => $now],
                [
                    'kode_kategori' => 'K02',
                    'nama_kategori'=>'Jurnal',
                    'kode_group'=>'G02',
                    'masa_retensi'=>'10',
                    'created_at' => $now, 'updated_at' => $now],
                    [
                        'kode_kategori' => 'K03',
                        'nama_kategori'=>'Jurnal',
                        'kode_group'=>'G03',
                        'masa_retensi'=>'10',
                        'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
