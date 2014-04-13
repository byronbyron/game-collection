@extends('layout.default')

@section('content')
    <div class="page-header">
        <h1>Games Collection</h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            {{ link_to_action('games.create', 'Create Game', null, ['class' => 'btn btn-primary']) }}
        </div>
    </div>

    @if ($games->isEmpty())
        <p>There are no games in the collection.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Completed</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game->title }}</td>
                        <td>{{ $game->publisher }}</td>
                        <td>{{ $game->completed ? 'yes' : 'no' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop