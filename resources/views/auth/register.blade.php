<link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">

@extends('layouts.base')

@section('title', 'Регистрация')

@section('content')
    <div class="container">
        <h2>Регистрация</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Подтвердите пароль</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <button type="submit" class="btn">Зарегистрироваться</button>
        </form>

        <a href="{{ route('login') }}" class="link">Уже есть аккаунт? Войти</a>
    </div>
@endsection