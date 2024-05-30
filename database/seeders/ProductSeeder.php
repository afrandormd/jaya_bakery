<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'nama' => 'Kue Bolu Gulung',
            'category_id' => 3,
            'harga' => 90000,
            'gambar' => 'bolugulung.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Kue Ulang Tahun',
            'category_id' => 2,
            'harga' => 120000,
            'gambar' => 'kueultah.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Roti Cokelat',
            'category_id' => 1,
            'harga' => 8000,
            'gambar' => 'roticokelat.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Roti Durian',
            'category_id' => 4,
            'harga' => 25000,
            'gambar' => 'rotidurian.png'
        ]);
    }
}
