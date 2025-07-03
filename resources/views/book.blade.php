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
        @auth
            <a href="{{ url('/profile') }}"><button class="btn btn-buy">Написать продавцу</button></a>
            <a href="{{ route('book.buy', $book->id) }}" ><button class="btn btn-buy">Купить</button></a>
        @endauth
        
        <a href="{{ url('/catalog') }}" class="btn btn-back">Назад</a>
    </div>
@endsection