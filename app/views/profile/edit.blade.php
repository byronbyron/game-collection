@extends('layouts/master')

@section('content')
    <h1>Edit Profile</h1>

    {{ Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username]]) }}

    <!-- Location Field -->
    <div class="form-group">
        {{ Form::label('location', 'Location:') }}
        {{ Form::text('location', null, ['class' => 'form-control']) }}
    </div>

    <!-- Bio Field -->
    <div class="form-group">
        {{ Form::label('bio', 'Bio:') }}
        {{ Form::textarea('bio', null, ['class' => 'form-control']) }}
    </div>

    <!-- Twitter Username Field -->
    <div class="form-group">
        {{ Form::label('twitter_username', 'Twitter Username:') }}
        {{ Form::text('twitter_username', null, ['class' => 'form-control']) }}
    </div>

    <!-- Facebook Handle Field -->
    <div class="form-group">
        {{ Form::label('facebook_username', 'Facebook Username:') }}
        {{ Form::text('facebook_username', null, ['class' => 'form-control']) }}
    </div>

    <!-- GitHub Username Field -->
    <div class="form-group">
        {{ Form::label('github_username', 'GitHub Username:') }}
        {{ Form::text('github_username', null, ['class' => 'form-control']) }}
    </div>

    <!-- Save Field -->
    <div class="form-group">
        {{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}
@stop