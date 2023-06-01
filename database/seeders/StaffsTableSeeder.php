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
                'name' => 'Muhammed Nik Ishaq bin Wazzirul Firdaus',
                'role' => 'staff',
                'department' => 'Marriage Request',
                'accessCategory' => 'admin',
                'position' => 'head',
                'paid' => 'PAID Pekan',
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
                'paid' => 'PAID Kuantan',
                'email' => 'staff2@example.com',
                'password' => 'password'
            ],
            [
                'ic' => '640712116791',
                'name' => 'Ninian Raj Kaur',
                'role' => 'staff',
                'department' => 'Marriage Register',
                'accessCategory' => 'staff',
                'position' => 'Advisor',
                'paid' => 'PAID Rompin',
                'email' => 'nahappan.anita@yahoo.com',
                'password' => 'password'
            ]
        ];

        foreach ($staffs as $key => $value) {
            Staff::create($value);
        }
    }
}
