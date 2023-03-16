<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nama_kategori' => 'Kecantikan',
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Alat Rumah Tangga',
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Bahan Mentah',
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Bumbu Dapur',
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Permainan',
        ]);

        DB::table('categories')->insert([
            'nama_kategori' => 'Kesehatan',
        ]);
    }
}
