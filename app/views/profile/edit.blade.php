@extends('layouts/master')

@section('content')

<div class="page-header">
    <h1>Edit Profile</h1>
</div>

{{ Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username]]) }}

<ul>
    <!-- Location Field -->
    <li>
        {{ Form::label('location', 'Location:') }}
        {{ Form::text('location') }}
    </li>

    <!-- Bio Field -->
    <li>
        {{ Form::label('bio', 'Bio:') }}
        {{ Form::textarea('bio') }}
    </li>

    <!-- Twitter Username Field -->
    <li>
        {{ Form::label('twitter_username', 'Twitter Username:') }}
        {{ Form::text('twitter_username') }}
    </li>

    <!-- Facebook Handle Field -->
    <li>
        {{ Form::label('facebook_username', 'Facebook Username:') }}
        {{ Form::text('facebook_username') }}
    </li>

    <!-- GitHub Username Field -->
    <li>
        {{ Form::label('github_username', 'GitHub Username:') }}
        {{ Form::text('github_username') }}
    </li>

    <!-- Save Field -->
    <li>
        {{ Form::submit('Update Profile') }}
    </li>
</ul>

{{ Form::close() }}

@stop