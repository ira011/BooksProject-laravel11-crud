<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author_first_name' => $this->faker->firstName,
            'author_last_name' => $this->faker->lastName,
            'date_published' => $this->faker->date,
            'synthesis' => $this->faker->paragraph,
            'isbn' => $this->faker->isbn13,
            'edition_number' => $this->faker->numberBetween(1, 10),
            'publisher' => $this->faker->company,
            'language' => $this->faker->languageCode,
        ];
    }
}