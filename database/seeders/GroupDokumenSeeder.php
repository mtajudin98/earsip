<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GroupDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('group_dokumens')->insert([
            [
                'kode_group' => 'G01',
                'nama_group'=>'Teller',
                'created_at' => $now, 'updated_at' => $now],
                [
                    'kode_group' => 'G04',
                    'nama_group'=>'Sekum',
                    'created_at' => $now, 'updated_at' => $now],
                    [
                        'kode_group' => 'G03',
                        'nama_group'=>'Kredit',
                        'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
