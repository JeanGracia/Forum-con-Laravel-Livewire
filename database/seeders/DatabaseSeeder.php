<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory(1)->create([
            'name' => 'Jean Gracia',
            'email' => 'jgracia@gmail.com',
            'password' => 'Empanadas29.'
        ]);

        \App\Models\Category::factory(10)
            ->hasThreads(20)
            ->create();

        \App\Models\Reply::factory(400)->create();
    }
}
