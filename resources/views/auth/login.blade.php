<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

@extends('layouts.base')

@section('title', 'Авторизация')

@section('content')
    <div class="container">
        <h2>Вход</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit" class="btn">Войти</button>
        </form>

        <a href="{{ route('register') }}" class="link">Еще нет аккаунта? Регистрация</a>
    </div>
@endsection