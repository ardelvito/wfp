<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {

            DB::table('suppliers')->insert([
                'name' => Str::random(5),
                'address' => Str::random(15)
            ]);
        }
    }
}
