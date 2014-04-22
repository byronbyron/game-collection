<?php namespace GameCollection\Services\Validation;

class GameValidator extends Validator {

    static $rules = [
        'title' => 'required',
        'publisher' => 'required'
    ];
}