<?php

use GameCollection\Services\Validation\GameValidator as Validator;

class GamesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$games = Game::all();
		
		return View::make('games.index', compact('games'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('games.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$game = new Game;
		$game->title = Input::get('title');
		$game->publisher = Input::get('publisher');
		$game->completed = Input::has('completed');
		$game->save();

		if ( ! $game->save())
		{
			return Redirect::back()->withErrors($game->getErrors())->withInput();
		}

		return Redirect::route('games.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$game = Game::findOrFail($id);

		return View::make('games.show', compact('game'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$game = Game::findOrFail($id);
		
		return View::make('games.edit', compact('game'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{		
		$game = Game::findOrFail($id);
		$game->title = Input::get('title');
		$game->publisher = Input::get('publisher');
		$game->completed = Input::has('completed');
		$game->save();

		if ( ! $game->save())
		{
			return Redirect::back()->withErrors($game->getErrors())->withInput();
		}

		return Redirect::route('games.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return View::make('games.delete');
	}

}