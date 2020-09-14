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
       DB::table('users')->insert([
         [
            'username' => 'admin',
            'user_role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
         ],
       ]);
    }
}
