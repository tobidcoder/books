<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed users
        App\User::create([
            'name' => 'Admin Thomas',
            'email' => 'admin@books.com',
            'password' => Hash::make('password'),
            'is_admin' => '1', //This user is an admin
        ]);

        App\User::create([
            'name' => 'User Thomas',
            'email' => 'user@books.com',
            'password' => Hash::make('password'),
            'is_admin' => '0',
        ]);

        App\User::create([
            'name' => 'Tobi Thomas',
            'email' => 'tobi@books.com',
            'password' => Hash::make('password'),
            'is_admin' => '0',
        ]);
    }
}
