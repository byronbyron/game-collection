<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();

        User::create([
            'username' => 'Byron',
            'email' => 'byronswfc@gmail.com',
            'password' => 'password'
        ]);
	}

}