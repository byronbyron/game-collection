<?php

use MyGames\Forms\Login;

class SessionsController extends \BaseController {

	protected $loginForm;

	/**
	 * @var MyGames\Forms\Login;
	 */
	public function __construct(Login $loginForm)
	{
		$this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'password');

		$this->loginForm->validate($input);

		if (Auth::attempt($input))
		{
			return Redirect::intended('/')->with('flash_message', 'You have been logged in successfully!');
		}

		return Redirect::back()->withInput()->with('flash_message', 'Wrong Email and password combination.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

		return Redirect::home()->with('flash_message', 'You have been logged out.');
	}

}