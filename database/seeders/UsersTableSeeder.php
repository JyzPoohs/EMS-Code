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
                'ic' => '111111111111',
                'name' => 'HADI BIN EFFIZ',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '015-9656390',
                'email' => 'user@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '222222222222',
                'name' => 'JOHN HARINUMENA',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '017-9386565',
                'email' => 'user2@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '830805104983',
                'name' => 'MOHAMMAD HJ FAZAL BIN ZAINUDDIN',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '015-1176912',
                'email' => 'mohammad@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '491219088510',
                'name' => 'KRISTHMAN a/l MOHANADES',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '018-4066217',
                'email' => 'krishnamurthi@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '870930065551',
                'name' => 'ALI BIN IDRIS',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '013-4112217',
                'email' => 'ali@gmail.com',
                'password' => 'password',
            ],
            [
                'ic' => '990909060331',
                'name' => 'HAFIZ BIN ABU ',
                'role' => 'user',
                'gender' => 'MALE',
                'phone' => '017-4066555',
                'email' => 'hafiz@gmail.com',
                'password' => 'password',
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
