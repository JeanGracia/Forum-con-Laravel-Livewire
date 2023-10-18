<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    public function definition(): array
    {
        return [
            //category_id
            'user_id' => rand(1, 10),
            'title' => fake()->sentence(),
            'body' => fake()->text(),
        ];
    }
}
