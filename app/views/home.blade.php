@extends('layout.default')

@section('content')
	<div class="jumbotron">
		<h1>Welcome to the Game Collection</h1>
		<p>{{ link_to_route('games.index', 'Learn more', null, ['class' => 'btn btn-primary btn-lg', 'role' => 'button']) }}</p>
	</div>
@stop