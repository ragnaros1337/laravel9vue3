<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KugooSamokat>
 */
class KugooSamokatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'kugoo model ' . fake()->word(),
            'capacity' => fake()->randomDigitNotZero() * 1000,
            'power'=> fake()->randomFloat(1, 0, 9),
            'speed'=> ceil(fake()->numberBetween(20, 120) / 10) * 10,
            'hours'=> fake()->numberBetween(1, 24),
            'price'=> fake()->randomFloat(2, 1, 10) * 10000
        ];
    }
}
