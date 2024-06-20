<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('unit_kerjas')->insert([
            ['kode_unit' => '0426','nama_unit'=>'KCP O1','telp'=>'04214242','alamat'=>'JL SKKSKSK','kode_induk'=>'0308', 'created_at' => $now, 'updated_at' => $now],
            ['kode_unit' => '0425','nama_unit'=>'KCP O2','telp'=>'04214242','alamat'=>'JL SKKSKSK','kode_induk'=>'0308', 'created_at' => $now, 'updated_at' => $now],
            ['kode_unit' => '0446','nama_unit'=>'KCP O4','telp'=>'04214242','alamat'=>'JL SKKSKSK','kode_induk'=>'0308', 'created_at' => $now, 'updated_at' => $now],
            ['kode_unit' => '0466','nama_unit'=>'KCP O3','telp'=>'04214242','alamat'=>'JL SKKSKSK','kode_induk'=>'0308', 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
