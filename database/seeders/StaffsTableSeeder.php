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
                'ic' => '333333333333',
                'name' => 'Muhammed Nik Ishaq bin Wazzirul Firdaus',
                'role' => 'staff',
                'department' => 'MARRIAGE REQUEST',
                'accessCategory' => 'ADMINISTRATOR',
                'position' => 'MARRIAGE COURSE OFFICER',
                'paid' => 'PAID PEKAN',
                'email' => 'staff1@example.com',
                'password' => 'password',
                'status' => 'APPROVE'
            ],
            [
                'ic' => '444444444444',
                'name' => 'Hafiz Bin Ahmad',
                'role' => 'staff',
                'department' => 'MARRIAGE COURSE',
                'accessCategory' => 'STAFF',
                'position' => 'MARRIAGE REQUEST OFFICER',
                'paid' => 'PAID KUANTAN',
                'email' => 'staff2@example.com',
                'password' => 'password',
                'status' => 'APPROVE',
            ],
            [
                'ic' => '640712116791',
                'name' => 'Ninian Raj Kaur',
                'role' => 'staff',
                'department' => 'MARRIAGE REGISTER',
                'accessCategory' => 'STAFF',
                'position' => 'MARRIAGE REGISTER OFFICER',
                'paid' => 'PAID ROMPIN',
                'email' => 'nahappan.anita@yahoo.com',
                'password' => 'password',
                'status' => 'PENDING',
            ],
            [
                'ic' => '871010080214',
                'name' => 'Jane Sivalingam',
                'role' => 'staff',
                'department' => 'SYSTEM MANAGEMENT',
                'accessCategory' => 'ADMINISTRATOR',
                'position' => 'MARRIAGE ADMINISTRATOR',
                'paid' => 'PAID KUANTAN BARAT',
                'email' => 'cdevaser@gmail.com',
                'password' => 'password',
                'status' => 'PENDING',
            ],
            [
                'ic' => '780101126241',
                'name' => 'Janet Olivia',
                'role' => 'staff',
                'department' => 'INCENTIVE',
                'accessCategory' => 'STAFF',
                'position' => 'MARRIAGE COORDINATOR',
                'paid' => 'PAID JENGKA',
                'email' => 'olivia@gmail.com',
                'password' => 'password',
                'status' => 'REJECT',
            ],
        ];

        foreach ($staffs as $key => $value) {
            Staff::create($value);
        }
    }
}
