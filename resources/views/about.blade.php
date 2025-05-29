<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">

@extends('layouts.base')

@section('title', 'О нас')

@section('content')
    <div class="container">
        <h2 class="h2">О нас</h2>
        <div class="st">« <div class="ch"></div> «« ㅤ<img class="icon" src="{{ asset('assets/img/icon_1.png') }}" alt="">ㅤ »» <div class="ch"></div> »</div>
        <p>
            Добро пожаловать в наш онлайн-форум или же интернет-магазин подержанных книг! Мы стремимся создать удобное пространство 
            для любителей чтения, где каждый сможет легко купить или продать книги по доступным ценам.
        </p>
        <p>
            Наша миссия – дать книгам вторую жизнь и помочь людям находить литературные сокровища, 
            делая чтение доступнее для всех.
        </p>
        <p>
            Присоединяйтесь к нам и станьте частью книжного сообщества!
        </p>
        
        <a href="/" class="btn">На главную</a>
    </div>
@endsection