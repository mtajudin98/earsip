<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('members')->insert([
            [
                'kode_member' => '0426',
                'nama_member'=>'asep',
                'jabatan'=>'Staff',
                'divisi'=>'Operasional',
                'created_at' => $now, 'updated_at' => $now],
                [
                    'kode_member' => '0427',
                    'nama_member'=>'asep2',
                    'jabatan'=>'Staff',
                    'divisi'=>'Operasional',
                    'created_at' => $now, 'updated_at' => $now],
                    [
                        'kode_member' => '0428',
                        'nama_member'=>'asep4',
                        'jabatan'=>'Staff',
                        'divisi'=>'Operasional',
                        'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
