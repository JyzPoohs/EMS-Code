<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'ic' => '1111',
            'name' => 'user',
            'gender' => 'female',
            'phone' => '011',
            'email' => 'user@example.com',
            'password' => 'password',
        ]);
    }
}
