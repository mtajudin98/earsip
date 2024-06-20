<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KantorIndukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('kantor_induks')->insert([
            [
                'kode_induk' => '0301',
                'nama_induk'=>'ABABAB',
                'telp'=>'1299123',
                'alamat'=>'Jl 12912',
                'created_at' => $now, 'updated_at' => $now],
                [
                    'kode_induk' => '0302',
                    'nama_induk'=>'ABABAB',
                    'telp'=>'1299123',
                    'alamat'=>'Jl 12912',
                    'created_at' => $now, 'updated_at' => $now],
                    [
                        'kode_induk' => '03031',
                        'nama_induk'=>'ABABAB',
                        'telp'=>'1299123',
                        'alamat'=>'Jl 12912',
                        'created_at' => $now, 'updated_at' => $now],
                        [
                            'kode_induk' => '0303',
                            'nama_induk'=>'ABABAB',
                            'telp'=>'1299123',
                            'alamat'=>'Jl 12912',
                            'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
