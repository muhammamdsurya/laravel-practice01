@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h4>{{ $name }}</h4>
    <h6>{{ $email }}</h6>
    <img src="img/{{ $image }}" width="200" alt="">
@endsection
