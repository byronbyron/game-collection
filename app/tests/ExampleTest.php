<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function test_display_games_collection()
	{
		$this->call('GET', 'games');
		$this->assertResponseOk();
	}

	public function test_displays_form_for_creating_a_new_game()
	{
		$this->call('GET', 'games/create');
		$this->assertResponseOk();
	}
}