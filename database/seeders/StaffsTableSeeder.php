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
                'status' => 'approve'
            ],
            [
                'ic' => '4444',
                'name' => 'Hafiz Bin Ahmad',
                'role' => 'staff',
                'department' => 'Marriage Course',
                'accessCategory' => 'staff',
                'position' => 'manager',
                'paid' => 'PAID Kuantan',
                'email' => 'staff2@example.com',
                'password' => 'password',
                'status' => 'approve',
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
                'password' => 'password',
                'status' => 'pending',
            ],
            [
                'ic' => '871010080214',
                'name' => 'Jane Sivalingam',
                'role' => 'staff',
                'department' => 'Incentive',
                'accessCategory' => 'staff',
                'position' => 'Counsultant',
                'paid' => 'PAID Kuantan Barat',
                'email' => 'cdevaser@gmail.com',
                'password' => 'password',
                'status' => 'pending',
            ],
        ];

        foreach ($staffs as $key => $value) {
            Staff::create($value);
        }
    }
}
