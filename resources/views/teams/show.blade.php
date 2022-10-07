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
    <div class="blog-post">
        <h3>Comments:</h3>
        <ul>
            @foreach ($team->comments as $comment)
                <li> {{ $comment->content }}</li>
            @endforeach
        </ul>
    </div>

    <form method="POST" action="/teams/{{ $team->id }}/comments">

        @csrf

        <div class="mb-3">

            <label class="form-label">Leave a comment:</label>
            <textarea name="content" rows="2" class="form-control"></textarea>
        </div>

        @error('content')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
