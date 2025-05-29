<link rel="stylesheet" href="{{ asset('assets/css/indexstyle.css') }}">

@extends('layouts.base')

@section('title', 'Каталог книг')

@section('content')

    <div class="catalog-c">
        <h1>Каталог книг</h1>
        <div class="book-list">
            @foreach($books as $book)
            <div class="book-card">
                <div class="image-container image-cont-c">
                    <img class="img-book" src="{{ $book->image }}" alt="{{ $book->title }}">
                </div>
                <h2 class="book-title">{{ $book->title }}</h2>
                <p class="book-author">Автор: {{ $book->author }}</p>
                <p class="book-price">Цена: {{ $book->price }} руб.</p>
                <a href="{{ route('book.show', $book->id) }}"><button class="buy-button">Написать</button></a>
            </div>
            @endforeach
        </div>
    </div>

@endsection