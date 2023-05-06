<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->words(rand(7, 15), true),
            'content' => $this->faker->sentences(rand(15, 20), true),
            'published_at' => $this->faker->randomElement([null, now()->subMinutes(rand(1, 30))]),
        ];
    }
}
