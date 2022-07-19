<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->randomElement(User::pluck('id')),
            'title' => fake()->word(),
            'description' => fake()->text(250),
            'price' => fake()->numberBetween($min = 50, $max = 300),
            'location' => fake()->address(),
            'tags' => implode(',', fake()->words($nb = 3, $asText = false)),
        ];
    }
}
