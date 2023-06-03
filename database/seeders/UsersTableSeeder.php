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
                'name' => 'Hadfina Binti Effendi',
                'role' => 'user',
                'gender' => 'FEMALE',
                'phone' => '015-9656390',
                'email' => 'user@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '2222',
                'name' => 'John Hairunnezam',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '017-9386565',
                'email' => 'user2@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '830805104983',
                'name' => 'Mohammad Hj Fazal bin Zainudin',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '015-1176912',
                'email' => 'mohammad@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '491219088510',
                'name' => 'Krishnamurthi a/l Mohanadas',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '018-4066217',
                'email' => 'krishnamurthi@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '1331',
                'name' => 'Testing Use',
                'role' => 'user',
                'gender' => 'FEMALE',
                'phone' => '011-4066217',
                'email' => 'jessie1695@gmail.com',
                'password' => 'password',
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
