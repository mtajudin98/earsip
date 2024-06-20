<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class DetailArsipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('detail_arsips')->insert([
            [
                'kode_pelaksana' => 'M011',
                'kode_unit'=>'0444',
                'kode_kategori'=>'DDJ',
                'no_referensi'=>'E710',
                'perihal'=>'JURNAL',
                'nama_dokumen'=>'Teller',
                'tanggal_rilis'=>$now,
                'tanggal_selesai'=>$now,
                'tingkat_perkembangan'=>'Asli',
                'media_simpan'=>'Kertas',
                'kondisi'=>'Baik',
                'status'=>'Inaktif',
                'nobox'=>'0308.A.01.2024',
                'kode_penyimpanan'=>'0444',
                'lokasi_penyimpanan'=>'Rak 01','created_at' => $now, 'updated_at' => $now
            ],
            [
                'kode_pelaksana' => 'M011',
                'kode_unit'=>'0444',
                'kode_dokumen'=>'DDJ',
                'no_referensi'=>'E710',
                'perihal'=>'JURNAL',
                'nama_dokumen'=>'Teller',
                'tanggal_rilis'=>$now,
                'tanggal_selesai'=>$now,
                'tingkat_perkembangan'=>'Asli',
                'media_simpan'=>'Kertas',
                'kondisi'=>'Baik',
                'status'=>'Inaktif',
                'no_box'=>'0308.A.01.2024',
                'kode_penyimpanan'=>'0444',
                'lokasi_penyimpanan'=>'Rak 01','created_at' => $now, 'updated_at' => $now
            ],
            [
                'kode_pelaksana' => 'M011',
                'kode_unit'=>'0444',
                'kode_dokumen'=>'DDJ',
                'no_referensi'=>'E710',
                'perihal'=>'JURNAL',
                'nama_dokumen'=>'Teller',
                'tanggal_rilis'=>$now,
                'tanggal_selesai'=>$now,
                'tingkat_perkembangan'=>'Asli',
                'media_simpan'=>'Kertas',
                'kondisi'=>'Baik',
                'status'=>'Inaktif',
                'no_box'=>'0308.A.01.2024',
                'kode_penyimpanan'=>'0444',
                'lokasi_penyimpanan'=>'Rak 01','created_at' => $now, 'updated_at' => $now
            ],
            [
                'kode_pelaksana' => 'M011',
                'kode_unit'=>'0444',
                'kode_dokumen'=>'DDJ',
                'no_referensi'=>'E710',
                'perihal'=>'JURNAL',
                'nama_dokumen'=>'Teller',
                'tanggal_rilis'=>$now,
                'tanggal_selesai'=>$now,
                'tingkat_perkembangan'=>'Asli',
                'media_simpan'=>'Kertas',
                'kondisi'=>'Baik',
                'status'=>'Inaktif',
                'no_box'=>'0308.A.01.2024',
                'kode_penyimpanan'=>'0444',
                'lokasi_penyimpanan'=>'Rak 01','created_at' => $now, 'updated_at' => $now
            ],
            [
                'kode_pelaksana' => 'M011',
                'kode_unit'=>'0444',
                'kode_dokumen'=>'DDJ',
                'no_referensi'=>'E710',
                'perihal'=>'JURNAL',
                'nama_dokumen'=>'Teller',
                'tanggal_rilis'=>$now,
                'tanggal_selesai'=>$now,
                'tingkat_perkembangan'=>'Asli',
                'media_simpan'=>'Kertas',
                'kondisi'=>'Baik',
                'status'=>'Inaktif',
                'no_box'=>'0308.A.01.2024',
                'kode_penyimpanan'=>'0444',
                'lokasi_penyimpanan'=>'Rak 01','created_at' => $now, 'updated_at' => $now
            ],
            [
                'kode_pelaksana' => 'M011',
                'kode_unit'=>'0444',
                'kode_dokumen'=>'DDJ',
                'no_referensi'=>'E710',
                'perihal'=>'JURNAL',
                'nama_dokumen'=>'Teller',
                'tanggal_rilis'=>$now,
                'tanggal_selesai'=>$now,
                'tingkat_perkembangan'=>'Asli',
                'media_simpan'=>'Kertas',
                'kondisi'=>'Baik',
                'status'=>'Inaktif',
                'no_box'=>'0308.A.01.2024',
                'kode_penyimpanan'=>'0444',
                'lokasi_penyimpanan'=>'Rak 01','created_at' => $now, 'updated_at' => $now
            ],
        ]);
    }
}
