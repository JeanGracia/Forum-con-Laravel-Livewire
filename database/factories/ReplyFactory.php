<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ReplyFactory extends Factory
{

    public function definition(): array
    {
        return [
            'thread_id' => rand(1, 200),
            'user_id' => rand(1, 10),
            'body' => fake()->text()
        ];
    }
}
