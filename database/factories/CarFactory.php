<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_type_id' => CarType::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'city_id' => City::inRandomOrder()->first()->id,
            'name' => fake()->firstName(),
            'age' => fake()->numberBetween(1, 15),
            'price' => ((int) fake()->randomFloat(2, 1, 10)) * 1000,
            'address' => fake()->address(),
            'phone' => function (array $attributes) {
                return User::find($attributes['user_id'])->phone;
            },
            'description' => fake()->text(2000),
            'published_at' => fake()->optional(0.9)
                ->dateTimeBetween('-1 month', '+1 day')
        ];
    }
}
