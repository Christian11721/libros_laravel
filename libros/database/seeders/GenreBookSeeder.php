<?php

namespace Database\Seeders;

use App\Models\GenreBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GenreBook::factory(20)->create();
    }
}
