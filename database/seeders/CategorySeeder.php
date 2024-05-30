<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'nama' => 'Roti',
            'gambar' => 'roti.png'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Tart',
            'gambar' => ' tart.png'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Bolu',
            'gambar' => ' bolu.png'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Roti Sobek',
            'gambar' => ' rotisobek.png'
        ]);
    }
}
