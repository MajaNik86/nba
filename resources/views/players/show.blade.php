@extends('layouts.master')

@section('title', 'Player')

@section('content')

    <h2 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h2>

    <p> Email: {{ $player->email }}</p>

    <p> Team:<a href="/teams/{{ $player->team->id }}"> {{ $player->team->name }} </a></p>

    </p>


@endsection
