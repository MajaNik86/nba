@extends('layouts.master')
@section('title', $new->title)

@section('content')

    <h2 class="blog-post-title"> {{ $new->title }}</h2>
    <p>Created by: {{ $new->user->name }} </p>
    <p> {{ $new->content }}</p>

@endsection
