@extends('layouts.master')

@section('content')

<h1>{{ Auth::check() ? "Welcome " . Auth::user()->username : "Welcome!" }}</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, expedita, natus rem nobis sit voluptatibus culpa. Harum vel incidunt ab expedita quidem atque molestias exercitationem deserunt ullam ducimus. Tenetur, velit.
</p>

@stop