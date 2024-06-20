<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(DetailArsipSeeder::class);
        $this->call(GroupDokumenSeeder::class);
        $this->call(KantorIndukSeeder::class);
        $this->call(KategoriDokumenSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(PeminjamanSeeder::class);
        $this->call(PengembalianSeeder::class);
        $this->call(UnitKerjaSeeder::class);
    }
}
