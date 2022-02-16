{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href ="/posts/{{ $post["slug"] }}"><h2>{{ $post["title"] }}</h2></a>
            <h6>By : {{ $post["author"] }}</h6>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection
