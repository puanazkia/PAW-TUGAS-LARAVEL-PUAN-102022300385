<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Produk::create([
            'nama_barang' => 'Mie Instan',
            'kategori' => 'Makanan',
            'stok' => 25,
            'harga' => 3000
        ]);

        Produk::create([
            'nama_barang' => 'Minyak Goreng',
            'kategori' => 'Sembako',
            'stok' => 10,
            'harga' => 15000
        ]);

        Produk::create([
            'nama_barang' => 'Sabun Mandi',
            'kategori' => 'Kebutuhan Rumah',
            'stok' => 30,
            'harga' => 5000
        ]);
    }
}
