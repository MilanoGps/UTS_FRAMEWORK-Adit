<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'XY001',
                'nama_barang' => 'Toren Air',
                'harga_barang' => 5000000,
                'deskripsi_barang' => "Kapasitas 5000 Liter",
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'XY002',
                'nama_barang' => 'Cat',
                'harga_barang' => 20000,
                'deskripsi_barang' => "Asli Produk Jepang",
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'XY003',
                'nama_barang' => 'Semen',
                'harga_barang' => 70000,
                'deskripsi_barang' => "Kuat dan Kokoh",
                'satuan_id' => 3
            ],
        ]);
    }
}
