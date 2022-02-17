@extends('layouts.main')

@section('container')
    <h1>Posts Category</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection
