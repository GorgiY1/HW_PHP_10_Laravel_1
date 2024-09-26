@extends('layouts.base')
@section('title', $bb->title)
@section('main')
<h1>Детали</h1>
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }} $.</p>
    {{-- <p><a href="/">На перечень объявлений</a></p> --}}
    <p><a href="{{ route('index') }}">На перечень объявлений</a></p>
@endsection('main')

