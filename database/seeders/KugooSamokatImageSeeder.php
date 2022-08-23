<?php

namespace Database\Seeders;

use App\Models\KugooSamokat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KugooSamokatImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('kugoo_samokats')->exists()){
            $constrained_id = KugooSamokat::min('id');
            $count = KugooSamokat::count();
            $first_id = 1;
            for($i = 1; $i <= $count; $i++){
                $rand_image = random_int(1, 3);
                for($y = 1; $y <= $rand_image; $y++) {
                    DB::table('kugoo_samokat_images')->insert(
                        [
                            'id' => $first_id,
                            'kugoo_samokat_id' => $constrained_id,
                            'image' => 'photo_' . $y . '.jpg'
                        ]
                    );
                    $first_id++;
                }
                $constrained_id++;
            }
        }
    }
}
