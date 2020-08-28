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
                'username' => 'Marie',
                'email' => 'marie@visitor.fr',
                'password' => Hash::make('marie'),
                'user_role' => 'visitor'
             ],
             [
                'username' => 'Carl',
                'email' => 'carl@visitor.fr',
                'password' => Hash::make('carl'),
                'user_role' => 'visitor'
             ],
             [
                'username' => 'Tania',
                'email' => 'tania@admin.fr',
                'password' => Hash::make('tania'),
                'user_role' => 'admin'
             ],
             [
                'username' => 'admin',
                'email' => 'admin@admin.fr',
                'password' => Hash::make('admin'),
                'user_role' => 'admin'
            ]
        ]);
    }
}
