<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => '1',
                'nama_satuan' => 'Liter',
            ],
            [
                'kode_satuan' => '2',
                'nama_satuan' => 'Kg',
            ],
            [
                'kode_satuan' => '3',
                'nama_satuan' => 'Sak',
            ],
        ]);
    }
}
