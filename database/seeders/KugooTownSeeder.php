<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KugooTownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('kugoo_towns')->exists()) {
            for ($i = 1; $i <= 10; $i++) {
                DB::table('kugoo_towns')->insert(
                    [
                        'id' => $i,
                        'town' => fake()->city()
                    ]
                );
            }
        }
    }
}
