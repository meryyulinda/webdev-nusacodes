@extends('template')

@section('content')
    <h1 style="color: blue;">This is your profile:</h1>

    <p>Name: {{ $full_name }}</p>
    <p>Age: {{ $age }}</p>
    <p>Score: {{ $score }}</p>

@endsection