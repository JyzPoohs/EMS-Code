<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'ic' => '1111',
                'name' => 'user',
                'gender' => 'female',
                'phone' => '011',
                'email' => 'user@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '2222',
                'name' => 'user',
                'gender' => 'male',
                'phone' => '012',
                'email' => 'user2@example.com',
                'password' => 'password',
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
