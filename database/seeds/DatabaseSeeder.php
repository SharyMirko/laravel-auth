<?php

use Illuminate\Database\Seeder;
use App\UserInfo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(UserSeeder::class);
        $this->call(UserInfoSeeder::class);
        $this->call(PostSeeder::class);
    }
}
