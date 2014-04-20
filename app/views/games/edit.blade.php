@extends('layout.default')

@section('content')
    <div class="page-header">
        <h1>Edit Game</h1>
    </div>

    {{ Form::model($game, ['method' => 'PATCH', 'route' => ['games.update', $game->id]]) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('publisher', 'Publisher') }}
            {{ Form::text('publisher', null, ['class' => 'form-control']) }}
        </div>
        <div class="checkbox">
            {{ Form::label('completed', 'Completed?') }}
            {{ Form::checkbox('completed') }}
        </div>
        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
        {{ link_to_route('games.index', 'Cancel', null, ['class' => 'btn btn-link']) }}
    {{ Form::close() }}

@stop