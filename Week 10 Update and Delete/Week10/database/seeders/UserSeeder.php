<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert
            (
                [
                    'name' => Str::random(10),
                    'email' => Str::random(10).'@gmail.com',
                    'password' => bcrypt('12345')
                ]
            );
        }
    }
}
