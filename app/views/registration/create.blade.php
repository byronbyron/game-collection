@extends('layouts.master')

@section('meta-title', 'Regiser - Game Collerction')

@section('content')
    
<h1>Register</h1>
    
{{ Form::open(['route' => 'registration.store']) }}

<ul>
    <!-- Username Field -->
    <li>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', null, ['required' => 'required']) }}
        {{ errors_for('username', $errors) }}
    </li>

    <!-- Email Field -->
    <li>
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email', null, ['required' => 'required']) }}
        {{ errors_for('email', $errors) }}
    </li>

    <!-- Password Field -->
    <li>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['required' => 'required']) }}
        {{ errors_for('password', $errors) }}
    </li>

    <!-- Password Confirmation Field -->
    <li>
        {{ Form::label('password_confirmation', 'Password Confirmation:') }}
        {{ Form::password('password_confirmation', ['required' => 'required']) }}
    </li>

    <!-- Submit Field -->
    <li>
        {{ Form::submit('Create Account') }}
    </li>
</ul>

{{ Form::close() }}
    
@stop