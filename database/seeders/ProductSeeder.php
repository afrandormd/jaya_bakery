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
        // DB::table('products')->insert([
        //     'nama' => 'Kue Bolu Gulung',
        //     'category_id' => 3,
        //     'harga' => 90000,
        //     'gambar' => 'bolugulung.png'
        // ]);

        // DB::table('products')->insert([
        //     'nama' => 'Kue Ulang Tahun',
        //     'category_id' => 2,
        //     'harga' => 120000,
        //     'gambar' => 'kueultah.png'
        // ]);

        // DB::table('products')->insert([
        //     'nama' => 'Roti Cokelat',
        //     'category_id' => 1,
        //     'harga' => 8000,
        //     'gambar' => 'roticokelat.png'
        // ]);

        // DB::table('products')->insert([
        //     'nama' => 'Roti Durian',
        //     'category_id' => 4,
        //     'harga' => 25000,
        //     'gambar' => 'rotidurian.png'
        // ]);
        // yang terkomentar sudah diisi ke dalam tabel di database

        DB::table('products')->insert([
            'nama' => 'Tiger Roll Slice',
            'category_id' => 1,
            'harga' => 10000,
            'gambar' => 'tigerrollslice.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Danish Keju Mini',
            'category_id' => 1,
            'harga' => 9000,
            'gambar' => 'danishkejumini.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Slice Cake Red Velvet',
            'category_id' => 2,
            'harga' => 9500,
            'gambar' => 'cakeredvelvet.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bolu Cokelat Oreo',
            'category_id' => 3,
            'harga' => 29000,
            'gambar' => 'bolucokelatoreo.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tart Slice',
            'category_id' => 2,
            'harga' => 23000,
            'gambar' => 'tartslice.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Slice Cake Cokelat',
            'category_id' => 2,
            'harga' => 9500,
            'gambar' => 'slicecakecokelat.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bolu Rainbow',
            'category_id' => 3,
            'harga' => 150000,
            'gambar' => 'bolurainbow.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Cup Sosis',
            'category_id' => 1,
            'harga' => 9000,
            'gambar' => 'cupsosis.png'
        ]);

    }
}
