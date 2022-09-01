<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\KugooTownFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(KugooSamokatSeeder::class);
		$this->call(KugooSamokatImageSeeder::class);
		//TODO: как запустить Фабрику несколько раз без модели
        //
//         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
