<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->registerStaff();
    }

    public function registerStaff()
    {
        $staffs = [
            [
                'ic' => '1234',
                'name' => 'staff 1',
                'department' => 'Marriage Request',
                'accessCategory' => 'admin',
                'position' => 'head',
                'paid' => 'Pahang',
                'email' => 'staff1@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '4567',
                'name' => 'staff 2',
                'department' => 'Marriage Course',
                'accessCategory' => 'staff',
                'position' => 'manager',
                'paid' => 'Kuantan',
                'email' => 'staff2@example.com',
                'password' => 'password'
            ]
        ];

        foreach ($staffs as $staff) {
            DB::table('staffs')->insert($staff);
        }
    }
}
