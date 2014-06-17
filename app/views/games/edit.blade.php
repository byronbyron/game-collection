@extends('layouts.master')

@section('content')

<h1>Edit Game</h1>

{{ Form::model($game, ['method' => 'PATCH', 'route' => ['games.update', $game->id]]) }}
    
    @include('games/partials/_form', ['buttonText' => 'Update Game'])
    
{{ Form::close() }}

@stop