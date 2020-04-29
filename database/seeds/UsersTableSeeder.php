<?php

use App\User;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = Factory::create();

        $password = Hash::make('simpleapi');

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password
        ]);


        for($i=0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
