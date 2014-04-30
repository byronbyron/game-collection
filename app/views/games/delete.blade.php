@extends('layout.default')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $game->title }} <small>Are you sure?</small></h1>
        {{ Form::open() }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Yes', ['class' => 'btn btn-danger']) }}
            {{ link_to_route('games.index', 'No', ['class' => 'btn btn-default']) }}
        {{ Form::close() }}
    </div>
@stop