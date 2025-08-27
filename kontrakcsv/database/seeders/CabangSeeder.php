<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $branches = [
            ['nama_cabang' => 'Jakarta Pusat'],
            ['nama_cabang' => 'Bandung Utara'],
            ['nama_cabang' => 'Surabaya Timur'],
            ['nama_cabang' => 'Yogyakarta Selatan'],
            ['nama_cabang' => 'Medan Barat'],
        ];

        $i = 1;
        foreach ($branches as $branch) {
            DB::table('table_cabang')->insert([
                'kode_cabang' => 'CB00' . $i++,
                'nama_cabang' => $branch['nama_cabang'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $i++;
        }
    }
}
