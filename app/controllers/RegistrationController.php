<?php

use MyGames\Forms\RegistrationForm;

class RegistrationController extends \BaseController {

	protected $registrationForm;

	/**
	 * @var MyGames\Forms\RegistrationForm
	 */
	public function __construct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$userInput = Input::only(
			'username',
			'email',
			'password',
			'password_confirmation'
		);

		$profileInput = Input::only(
			'location',
			'bio',
			'twitter_username',
			'facebook_username',
			'github_username'
		);

		$this->registrationForm->validate($userInput);

		$user = User::create($userInput);
		$user->profile()->save(new Profile($profileInput));

		Auth::login($user);

		return Redirect::home();		
	}

}