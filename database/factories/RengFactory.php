<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reng>
 */
class RengFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(50),
            'cover' => 'image/nothumb.jpg',
            'description' => fake()->text(150),
            'duration' => rand(15, 200),
            'rate' => rand(4, 10),
            'status' => '1'
        ];
    }
}
