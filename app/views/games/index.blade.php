@extends('layouts.master')

@section('content')

<h1>Game Collection</h1>
 
{{ link_to_action('games.create', 'Create New Game') }}

@if ($games->isEmpty())
    <p>There are no games in the collection.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Publisher</th>
                <th>Completed</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ link_to_route('games.show', $game->title, $game->id) }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->completed ? 'yes' : 'no' }}</td>
                    <td>
                        {{ link_to_route('games.edit', 'Edit', $game->id) }}
                        {{ Form::open(['url' => 'games/' . $game->id]) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete') }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@stop