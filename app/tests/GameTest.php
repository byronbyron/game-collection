<?php

class GameTest extends AppTester {

	/**	@test */
	public function it_fetches_games()
	{
		$this->makeGame();

		$this->call('GET', 'games');

		$this->assertResponseOk();
	}

	private function makeGame($gameFields = [])
	{
		$game = array_merge([
			'user_id' 	=> 1,
			'title' 	=> $this->fake->sentence,
			'publisher' => $this->fake->word,
			'completed' => $this->fake->boolean
		], $gameFields);

		Game::create($game);
	}
}