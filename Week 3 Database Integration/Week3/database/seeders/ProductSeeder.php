<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 25; $i++) { 
            
            DB::table('products')->insert([
                'nama_produk' => Str::random(10),
                'jumlah_stok' => rand(0,20),
                'harga_jual' => rand(15000, 50000),
                'category_id' => rand(1,6),
                'harga_produksi' => rand(1000, 10000),
                'supplier_id' => rand(1,6),
            ]);
        }
    }
}
