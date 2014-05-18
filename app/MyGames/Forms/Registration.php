<?php namespace MyGames\Forms;

use Laracasts\Validation\FormValidator;

class Registration extends FormValidator {

    /**
     * Validation rules for registering
     * 
     * @var array
     */
    protected $rules = [
        'username' => 'required|unique:users',
        'email'    => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];
}