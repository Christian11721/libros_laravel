<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GenreBook>
 */
class GenreBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'book_id'=>Book::all()->random()->id,
        'gender_id'=>Gender::all()->random()->id,
        ];
    }
}
