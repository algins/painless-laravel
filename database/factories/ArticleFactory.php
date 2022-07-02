<?php

namespace Database\Factories;

use App\Enums\ArticleStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'status' => fake()->randomElement(ArticleStatus::cases()),
        ];
    }
}
