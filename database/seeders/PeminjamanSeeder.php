<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('peminjaman')->insert([
            [
                'kode_pelaksana' => 'M011',
                'member_kode'=>'001',
                'arsip_id'=>'13',
                'tanggal_pinjam'=>$now,
                'tanggal_kembali'=>$now,
                'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
