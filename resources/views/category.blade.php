@extends('layouts.main')

@section('container')
    <h1>Posts Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mt-3">
            <a href="/posts/{{ $post->slug }}">
                <h2>{{ $post->title }}</h2>
            </a>
            {{-- <h6>By : {{ $post['author'] }}</h6> --}}
            {{ $post->excerpt }}
        </article>
    @endforeach
@endsection
