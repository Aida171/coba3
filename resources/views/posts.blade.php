@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post['title'] }}</h2>
        <h6>By : {{ $post['author'] }}</h6>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/post">&#x2190; Back to Posts</a>
@endsection
