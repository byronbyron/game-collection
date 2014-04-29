@extends('layout.default')

@section('content')
    <div class="page-header">
        <h1>Create New Game</h1>
    </div>

    {{ Form::open(['method' => 'POST', 'route' => 'games.store', 'class' => 'well']) }}
        @include('games/partials/_form')
    {{ Form::close() }}

@stop