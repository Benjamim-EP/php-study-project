
@extends('site.master')
@section('content')
    <h2>Pots</h2>

    <ul>
        @foreach ($posts as $post)
            <li> <a href="/post/{{ $post->slug }}"> {{ $post->title }} - <small>{{ $post->user->firstName }} {{ $post->user->lastName }}</small> </a></li>
        @endforeach
    </ul>
@stop
