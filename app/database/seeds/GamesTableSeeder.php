<?php

use Faker\Factory as Faker;

class GamesTableSeeder extends Seeder {

	public function run()
	{
        Game::truncate();
		$faker = Faker::create();

		Game::create([
            'title' => 'Call of Duty',
            'publisher' => 'Activision',
            'completed' => true
        ]);

        Game::create([
            'title' => 'Battlefield',
            'publisher' => 'Electronic Arts',
            'completed' => true
        ]);

        Game::create([
            'title' => 'SSX',
            'publisher' => 'Electronic Arts',
            'completed' => false
        ]);
	}

}