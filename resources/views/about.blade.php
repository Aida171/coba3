@extends('layouts.main')

@section('container')
    <h3>Halaman ini berisi data Admin</h3>
    <p>Nama : {{ $name }} <br> 
    Email : {{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" height="150px" width="150px" class="img-tumbnail rounded-circle" >
@endsection
