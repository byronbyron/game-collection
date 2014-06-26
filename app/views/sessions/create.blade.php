@extends('layouts.master')

@section('meta-title', 'Login - Game Collection')

@section('content')

<div class="page-header">
    <h1>Login</h1>
</div>

{{ Form::open(['route' => 'sessions.store']) }}

<ul>
    <!-- Email Field -->
    <li>
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email') }}
        {{ errors_for('email', $errors) }}
    </li>

    <!-- Password Field -->
    <li>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ errors_for('password', $errors) }}
    </li>

    <!-- Submit Field -->
    <li>
        {{ Form::submit('Login') }}
    </li>
</ul>

{{ Form::close() }}

@stop