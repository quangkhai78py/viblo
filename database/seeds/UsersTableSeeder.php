<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@i-mall.com',
            'username' => 'quangkhai78py',
            'password' => bcrypt('123123123'),
        ]);
    }
}