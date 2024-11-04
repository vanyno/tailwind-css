<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pinjaman')->insert([
            [
                'id' => 1,
                'name' => 'Aristo',
                'jumlah_pinjaman' => 1000000,
                'sisa_pinjaman' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Justin Liauw',
                'jumlah_pinjaman' => 100000,
                'sisa_pinjaman' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}