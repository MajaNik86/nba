<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
</head>

<body>
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

        {{-- <p class="blog-post-meta"> Genre: <a href="{{ route('list-genre', ['genre' => $movie->genre]) }}">
                {{ $movie->genre }}</a></p>
        <p class="blog-post-meta">Release date: {{ $movie->year }}, directed by:<a href="#">{{ $movie->director }}</a>
        </p> --}}


        {{-- <p>Storyline:{{ $movie->storyline }}</p> --}}
    </div><!-- /.blog-post -->


</body>

</html>
