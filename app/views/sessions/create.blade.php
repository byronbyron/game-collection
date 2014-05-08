@extends('layout.default')

@section('content')
    <h1>Login</h1>

    {{ Form::open(['route' => 'sessions.store', 'class' => 'well']) }}
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close() }}
@stop