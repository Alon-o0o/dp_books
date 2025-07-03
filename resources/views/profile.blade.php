<link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">

@extends('layouts.base')

@section('title', 'Профиль')

@section('content')
    <div class="block">
        <div class="container">
            {{-- <h2 class="h2">Профиль пользователя</h2> --}}

            <div class="avatar">
                <img class="photo" src="{{ $user->photo ? asset($user->photo) : asset('assets/images/default-avatar.jpg') }}" alt="Аватар">
                <button onclick="document.getElementById('photoModal').style.display='block'" class="btn-photo">Поменять фото</button>

                <div id="photoModal" style="display:none; z-index: 10; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
                    <div style="background: white; padding: 30px; width: 50%; margin: 100px auto; border-radius: 10px; color:darkolivegreen; ">
                        <h2>Загрузить фото?</h2>
                        <form action="{{ route('profile.photo.upload') }}" method="POST" enctype="multipart/form-data" class="form-avatar">
                            @csrf
                            <label for="photo">Загрузить фото:</label>
                            <input type="file" name="photo" id="photo" accept="image/*" class="btn-clos">
                            <button type="submit" class="btn-clos">Сохранить</button>
                        </form>
                        @if(session('success'))
                            <p class="success">{{ session('success') }}</p>
                        @endif
                        @if($errors->has('photo'))
                            <p class="error">{{ $errors->first('photo') }}</p>
                        @endif
                        <br>
                        <button onclick="document.getElementById('photoModal').style.display='none'" class="btn-clos">Нет</button>
                    </div>
                </div>
            </div>
            
            <div class="info"><strong>Имя:</strong> {{ $user->name }}</div>
            <div class="info"><strong>Email:</strong> {{ $user->email }}</div>
            <div class="info"><strong>Дата регистрации:</strong> {{ $user->created_at->format('d.m.Y') }}</div>
        </div>
        <div class="container">
            <h2 class="h2-d">История чатов</h2>
            <div class="line"></div>
            <div class="chats">
                <div ><img class="icon" src="{{ $user->photo }}" alt=""></div>
                <div class="dialog">
                    <div class="name">Имя</div>
                    <div class="text">Чат в разработке</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container block-books">
        <h2 class="h2-d">Интересующие книги</h2>
        @forelse($user->purchases as $book)
            <div class="line"></div>
            <div class="chats">
                <img src="{{ $book->image }}" alt="{{ $book->title }}" class="photo-book">
                <div class="dialog">
                    <div class="name"><a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a></div> 
                    <div class="text">{{ $book->price }} ₽</div>
                </div>
            </div>
        @empty
            <div class="line"></div>
            <p>Вы еще не купили ни одной книги.</p>
        @endforelse
    </div>

@endsection