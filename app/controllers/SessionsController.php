<?php

class SessionsController extends \BaseController {

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
		$session = Input::all();

		$attempt = Auth::attempt([
			'email' => $session['email'],
			'password' => $session['password']
		]);

		if ($attempt) return Redirect::intended('games')->with('flash_message', 'You have been logged in successfully!');

		return Redirect::back()->with('flash_message', 'Invalid email or password.')->withInput();
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