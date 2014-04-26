<?php

class Game extends BaseModel {
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected static $rules = [
        'title' => 'required',
        'publisher' => 'required'
    ];

}