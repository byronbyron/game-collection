@extends('layout.default')

@section('content')
    <div class="page-header">
        <h1>Create New Game</h1>
    </div>

    {{ Form::open(['method' => 'POST', 'route' => 'games.store']) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Call of Duty']) }}
            {{ $errors->first('title', '<span class="">:message</span>') }}
        </div>
        <div class="form-group">
            {{ Form::label('publisher', 'Publisher') }}
            {{ Form::text('publisher', null, ['class' => 'form-control', 'placeholder' => 'Activision']) }}
            {{ $errors->first('publisher', '<span class="">:message</span>') }}
        </div>
        <div class="checkbox">
            {{ Form::label('completed', 'Completed?') }}
            {{ Form::checkbox('completed') }}
        </div>
        <div class="form-group">
            {{ Form::submit('Create Game', ['class' => 'btn btn-primary']) }}
            {{ link_to_route('games.index', 'Cancel', null, ['class' => 'btn btn-link']) }}
        </div>
    {{ Form::close() }}

@stop