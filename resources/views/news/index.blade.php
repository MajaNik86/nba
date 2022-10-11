@extends('layouts.master')
@section('title', 'Teams')


@section('content')

    samo da vidimo da li radi ovo

    <ul>
        @foreach ($news as $new)
            <li>
                <a href="/news/{{ $new->id }}">
                    {{ $new->title }}
                </a>
                <p>Created by: {{ $new->user->name }}</p>
            </li>
        @endforeach
        {{ $news->links() }}
    </ul>
@endsection
