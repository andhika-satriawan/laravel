@extends('layouts.main')

@section('content')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" width="120" alt="{{ $name }}">
@endsection