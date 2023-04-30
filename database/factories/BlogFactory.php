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
            'title' => $title = $this->faker->words(rand(7, 15), true),
            'slug' => Str::slug($title),
            'content' => $content = $this->faker->sentences(rand(15, 20), true),
            'excerpt' => substr(strip_tags($content), 0, 150),
        ];
    }
}
