<link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">

@extends('layouts.base')

@section('title', 'Профиль')

@section('content')
    <div class="container">
        <h2 class="h2">Профиль пользователя</h2>

        <div class="avatar">
            {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>

        <div class="info"><strong>Имя:</strong> {{ $user->name }}</div>
        <div class="info"><strong>Email:</strong> {{ $user->email }}</div>
        <div class="info"><strong>Дата регистрации:</strong> {{ $user->created_at->format('d.m.Y') }}</div>
    </div>
@endsection