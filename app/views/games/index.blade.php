@extends('layout.default')

@section('content')
    <div class="page-header">
        <h1>Game Collection</h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            {{ link_to_action('games.create', 'Create New Game', null, ['class' => 'btn btn-primary']) }}
        </div>
    </div>

    @if ($games->isEmpty())
        <div class="alert alert-warning">
            <p>There are no games in the collection.</p>
        </div>
    @else
        <table class="table table-striped">
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
                            {{ link_to_route('games.edit', 'Edit', $game->id, ['class' => 'btn btn-xs btn-primary pull-left']) }}
                            {{ Form::open(['url' => 'games/' . $game->id]) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop