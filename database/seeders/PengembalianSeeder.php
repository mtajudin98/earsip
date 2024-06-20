<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('pengembalians')->insert([
            [
                'kode_pelaksana' => 'M011',
                'member_kode'=>'001',
                'peminjaman_id'=>'1',
                'tanggal_kembali'=>$now,
                'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
