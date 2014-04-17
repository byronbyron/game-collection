<?php

use Faker\Factory as Faker;

class GamesTableSeeder extends Seeder {

	public function run()
	{
        Game::truncate();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Game::create([
                'title' => $faker->sentence(3),
                'publisher' => $faker->word,
                'completed' => $faker->boolean()
			]);
		}
	}

}