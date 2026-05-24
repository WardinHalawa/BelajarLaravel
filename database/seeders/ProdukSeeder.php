<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_produk')->insert([
            [
            'nama_barang' => 'Asus TUF',
            'jenis_barang' => 'Laptop',
            'harga_barang' => 14000000,
            'created_at' => now()
        ], [
            'nama_barang' => 'Acer Apire',
            'jenis_barang' => 'Laptop',
            'harga_barang' => 14000000,
            'created_at' => now()
        ], [
            'nama_barang' => 'ROG',
            'jenis_barang' => 'Laptop',
            'harga_barang' => 14000000,
            'created_at' => now()
        ]
        ]);
    }
}
