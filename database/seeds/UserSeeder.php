<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            User::create([
                'name'      => $faker->name(),
                'email'     => $faker->email(),
                'password'  => Hash::make('qwerty3416'),
            ]);
        }
    }
}
