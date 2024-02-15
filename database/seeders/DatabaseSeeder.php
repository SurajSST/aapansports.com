<?php

namespace Database\Seeders;

use CouponSeeder;
use Illuminate\Database\Seeder;
use SettingTableSeeder;
use UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(SettingTableSeeder::class);
         $this->call(CouponSeeder::class);
    }
}
