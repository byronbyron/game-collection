<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGamesIndex()
	{
		$this->call('GET', 'games');
		$this->assertViewHas('games');
	}

	public function testGamesCreate()
	{
		$this->call('GET', 'games/create');
		$this->assertResponseOk();
	}

	public function testGamesShow()
	{
		$this->call('GET', 'games/1');
		$this->assertViewHas('game');
	}
}