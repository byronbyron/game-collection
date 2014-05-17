@extends('layout.default')

@section('content')
	<div class="starter-template">
		<h1>
            {{ Auth::check() ? "Welcome " . Auth::user()->username : "Why don't you sign up?" }}
        </h1>
		<p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, expedita, natus rem nobis sit voluptatibus culpa. Harum vel incidunt ab expedita quidem atque molestias exercitationem deserunt ullam ducimus. Tenetur, velit.      
        </p>
	</div>
@stop