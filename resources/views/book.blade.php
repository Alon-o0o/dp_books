<link rel="stylesheet" href="{{ asset('assets/css/book.css') }}">

@extends('layouts.base')

@section('title', '{{ $book->title }}')
    
@section('content')
    <div class="container">
        <img class="img-book" src="{{ $book->image }}" alt="{{ $book->title }}">
        <h2>{{ $book->title }}</h2>
        <p>{{ $book->author }}</p>
        <p class="p-abz">{{ $book->description }}</p>
        <div class="price">{{ $book->price }} ₽</div>

        <button class="btn btn-buy">Написать продавцу</button>
        <a href="/" class="btn btn-back">Назад</a>
    </div>
@endsection