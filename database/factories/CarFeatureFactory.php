<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarFeature>
 */
class CarFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calm' => fake()->boolean(),
            'playful' => fake()->boolean(),
            'talkative' => fake()->boolean(),
            'kids_friendly' => fake()->boolean(),
            'dogs_friendly' => fake()->boolean(),
            'litterbox_trained' => fake()->boolean(),
            'vaccine' => fake()->boolean(),
            'indoor' => fake()->boolean(),
            'outdoor' => fake()->boolean(),
        ];
    }
}
