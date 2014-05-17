<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();
		$faker = Faker::create();

        User::create([
            'username' => 'Byron',
            'email' => 'byronswfc@gmail.com',
            'password' => Hash::make('password')
        ]);
	}

}