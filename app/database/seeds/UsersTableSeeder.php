<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();
		$faker = Faker::create();

        User::create([
            'email' => 'byronswfc@gmail.com',
            'password' => Hash::make('password')
        ]);

		foreach(range(1, 9) as $index)
		{
			User::create([
                'email' => $faker->email,
                'password' => Hash::make($faker->word)
			]);
		}
	}

}