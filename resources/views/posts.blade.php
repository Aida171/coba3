{{-- Halaman single post --}}

@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By. Aida Mahmudah in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</p></a>
        {{-- <h6>By : {{ $post['author'] }}</h6> --}}
        <p>{{ $post->content }}</p>
    </article>
    <a href="/post">&#x2190; Back to Posts</a>
@endsection
