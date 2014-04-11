@extends('layout.default')

@section('content')
    <h1>Games Collection</h1>
    <table>
        <thead>
            <tr>
                <td>
                    Title
                </td>
                <td>
                    Publisher
                </td>
                <td>
                    Completed
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>
                        {{ $game->title }}
                    </td>
                    <td>
                        {{ $game->publisher }}
                    </td>
                    <td>
                        {{ $game->completed }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop