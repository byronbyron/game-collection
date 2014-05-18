@extends('layouts.master')

@section('meta-title', 'Login - Game Collection')

@section('content')
    <h1>Login</h1>

    {{ Form::open(['route' => 'sessions.store']) }}
        <!-- Email Field -->
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
            {{ errors_for('email', $errors) }}
        </div>

        <!-- Password Field -->
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            {{ errors_for('password', $errors) }}
        </div>

        <!-- Submit Field -->
        <div class="form-group">
            {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}
@stop