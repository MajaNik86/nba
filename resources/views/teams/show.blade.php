@extends('layouts.master')
@section('title', $team->name)


@section('content')

    <div class="blog-post">
        <h2 class="blog-post-title">{{ $team->name }}</h2>


        <p> Email: {{ $team->email }}
            <br>
            Address: {{ $team->address }}
            <br>
            City: {{ $team->email }}
        </p>

        <p>
            List of players:
        <ul>
            @foreach ($team->players as $player)
                <li>
                    <a href="{{ route('single-player', ['id' => $player->id]) }}">{{ $player->first_name }}
                        {{ $player->last_name }}</a>
                </li>
            @endforeach
        </ul>
        </p>
    </div>

@endsection
