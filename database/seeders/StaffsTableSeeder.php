<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staffs = [
            [
                'ic' => '3333',
                'name' => 'staff 1',
                'role' => 'staff',
                'department' => 'Marriage Request',
                'accessCategory' => 'admin',
                'position' => 'head',
                'paid' => 'Pahang',
                'email' => 'staff1@example.com',
                'password' => 'password',
            ],
            [
                'ic' => '4444',
                'name' => 'staff 2',
                'role' => 'staff',
                'department' => 'Marriage Course',
                'accessCategory' => 'staff',
                'position' => 'manager',
                'paid' => 'Kuantan',
                'email' => 'staff2@example.com',
                'password' => 'password'
            ]
        ];

        foreach ($staffs as $key => $value) {
            Staff::create($value);
        }
    }
}
