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
        $this->call(MarriageRegistrationSeeder::class);
        $this->call(CardApplicationTableSeeder::class);
        $this->call(MarriageRequestSeeder::class);
    }
}
