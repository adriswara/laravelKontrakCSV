<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $kodeJabatan = rand(101, 115);
            $kodeCabang = rand(1, 9);
            // Generate random start date within the past 2 years
            $startDate = now()->subDays(rand(0, 730));
            // Generate end date at least 30 days after start
            $endDate = $startDate->copy()->addDays(rand(30, 365));

            DB::table('table_pegawai')->insert([
                'nama_pegawai' => Str::random(10),
                'kode_jabatan' => $kodeJabatan,
                'kode_cabang' => 'CB00' . $kodeCabang,
                'tanggal_mulai_kontrak' => $startDate,
                'tanggal_akhir_kontrak' => $endDate,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
