<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 11; $i++) {
            DB::table('reservations')->insert([
                'kode_reservasi' => Str::random(10),
                'nama_peserta' => Str::random(10),
                'kode_file' => rand(1000, 10000),
                'waktu_mulai' => now(),
                'nomor_studion' => rand(1, 10)
            ]);
        }


    }
}
