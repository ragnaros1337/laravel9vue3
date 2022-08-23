<?php

namespace Database\Seeders;

use App\Models\KugooSamokat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KugooSamokatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		KugooSamokat::factory(10)->create();
		$samokats = KugooSamokat::select('price')->get();
		for($i=1; $i<=count($samokats); $i++){
			if($rand_size = random_int(0, 1) === 1){
				KugooSamokat::where('id', $i)->update(['discount_price' => $samokats[$i-1]->price * 0.1]);
			}
		}
    }
}
