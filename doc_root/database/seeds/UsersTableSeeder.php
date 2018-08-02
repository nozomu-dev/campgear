<?php

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
        App\User::create([
            'name' => 'nozomu_develop',
            'email' => 'matsu.uner@gmail.com',
            'password' => Hash::make('secure'),
            'remember_token' => str_random(10),
        ]);
    }
}
