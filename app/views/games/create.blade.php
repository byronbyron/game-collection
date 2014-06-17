@extends('layouts.master')

@section('content')

<h1>Create New Game</h1>

{{ Form::open(['method' => 'POST', 'route' => 'games.store']) }}
    
    @include('games/partials/_form')

{{ Form::close() }}

@stop