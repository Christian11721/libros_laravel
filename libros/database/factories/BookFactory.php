<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_id' => Author::all()->random()->id,
            'title' => fake()->word(),
            'publication_year' => fake()->year(),
            'place_edition' => fake()->state(),
            'editorial' => fake()->word(),
            'pages' => fake()->numberBetween(1, 2000),
            'slug' => fake()->unique()->slug(),
        ];
    }
}
