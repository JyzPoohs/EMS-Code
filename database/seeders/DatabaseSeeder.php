<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(StaffsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }

    // public function registerStaff()
    // {
    //     $staffs = [
    //         [
    //             'ic' => '3333',
    //             'name' => 'staff 1',
    //             'role' => 'staff',
    //             'department' => 'Marriage Request',
    //             'accessCategory' => 'admin',
    //             'position' => 'head',
    //             'paid' => 'Pahang',
    //             'email' => 'staff1@example.com',
    //             'password' => 'password',
    //         ],
    //         [
    //             'ic' => '4444',
    //             'name' => 'staff 2',
    //             'role' => 'staff',
    //             'department' => 'Marriage Course',
    //             'accessCategory' => 'staff',
    //             'position' => 'manager',
    //             'paid' => 'Kuantan',
    //             'email' => 'staff2@example.com',
    //             'password' => 'password'
    //         ]
    //     ];

    //     foreach ($staffs as $staff) {
    //         DB::table('staffs')->insert($staff);
    //     }
    // }
}
