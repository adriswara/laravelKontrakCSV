<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $listJabatan = [
            'Bank Teller',
            'Loan Officer',
            'Branch Manager',
            'Credit Analyst',
            'Compliance Officer',
            'Risk Management Specialist',
            'Relationship Manager',
            'Treasury Analyst',
            'Internal Auditor',
            'Islamic Finance Advisor',
            'Customer Service Representative',
            'Wealth Management Advisor',
            'IT Security Specialist',
            'Operations Manager',
            'Financial Analyst',
        ];
        
        $i = 101;
        foreach ($listJabatan as $jabatan) {
            DB::table('table_jabatan')->insert([
                'kode_jabatan' => $i,
                'nama_jabatan' => $jabatan,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $i++;
        }
    }
}
