<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KugooAppUserRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!DB::table('kugoo_app_user_ratings')->exists()) {
            for($i = 0; $i < 10; $i++){
                DB::table('kugoo_app_user_ratings')->insert(
                    [
                        'id' => $i + 1,
                        'user_ip' => fake()->ipv4,
                        'mark' => fake()->randomDigit()*0.5 + 0.5
                    ]
                );
            }
        }
    }
}
