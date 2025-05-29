<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/indexstyle.css') }}">

@extends('layouts.base')

@section('title', 'Главная страница')

@section('content')
    <div class="block1">
        <h1>Добро пожаловать на форум подержанных книг</h1>
        <p>Здесь вы можете найти, купить или продать книги</p>
    </div>

    <div class="catalog">
        <h1>Каталог книг</h1>
        <div class="book-list">
            @foreach($books as $book)
            <div class="book-card">
                <div class="image-container">
                    <img class="img-book" src="{{ $book->image }}" alt="{{ $book->title }}">
                </div>
                <h2 class="book-title">{{ $book->title }}</h2>
                <p class="book-author">Автор: {{ $book->author }}</p>
                <p class="book-price">Цена: {{ $book->price }} руб.</p>
                <a href="{{ route('book.show', $book->id) }}"><button class="buy-button">Написать</button></a>
            </div>
            @endforeach
        </div>
        <div class="more">
            <button class="btn-more"><a href="{{ url('/catalog') }}">Подробнее</a></button>
        </div>
    </div>
@endsection

