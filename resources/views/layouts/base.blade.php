<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог книг</title>
    <link rel="stylesheet" href="{{ asset('assets/css/basestyle.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo_ypr.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav">
            <ul>
                <p class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo_text.png') }}" alt="book"/></a></p>
            </ul>
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/catalog') }}">Каталог</a></li>
                <li><a href="{{ url('/about') }}">О нас</a></li>

                @auth
                <li><a href="{{ url('/profile') }}">Личный кабинет</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="exitbtn">
                            Выйти
                        </button>
                    </form>
                </li>
                @endauth

                @guest
                <li><a href="{{ url('/register') }}">Регистрация</a></li>
                <li><a href="{{ url('/login') }}">Войти</a></li>
                @endguest
            </ul>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container_footer">
            <div class="footer-content">
            <h2>Мир подержанных книг</h2>
            <p>Найдите книгу, которая вам нужна</p>
            </div>
            <nav class="footer-nav">
                <a href="/about">О нас</a>
                <button onclick="document.getElementById('contactsModal').style.display='block'" class="btn-condificu">Контакты</button>
                <button onclick="document.getElementById('privacyModal').style.display='block'" class="btn-condificu">Политика конфиденциальности</button>

                <div id="contactsModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
                    <div style="background: white; padding: 30px; width: 50%; margin: 100px auto; border-radius: 10px; color:darkolivegreen;">
                        <h2>Контакты</h2>
                        <p>Вы можете связаться с нами по email: grammaaevg@gmail.com</p>
                        <p>Вы можете задать вопросы по телефону: +7(982-254)-62-45</p>
                        <p>Вы можете связаться с нами по email: grammaaevg@gmail.com</p>
                        <br>
                        <button onclick="document.getElementById('contactsModal').style.display='none'" class="btn-clos">Закрыть</button>
                    </div>
                </div>

                <div id="privacyModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
                    <div style="background: white; padding: 30px; width: 50%; margin: 100px auto; border-radius: 10px; color:darkolivegreen;">
                        <h2>Политика конфиденциальности</h2>
                        <p>Ваши данные не передаются третьим лицам.</p>
                        <p>Вы можете связаться с нами по email: grammaaevg@gmail.com</p>
                        <br>
                        <button onclick="document.getElementById('privacyModal').style.display='none'" class="btn-clos">Закрыть</button>
                    </div>
                </div>
            </nav>
            <div class="footer-copy">
                &copy; <script>document.write(new Date().getFullYear())</script> Книги Есть. Все права защищены.
            </div>
        </div>
    </footer>
</body>
</html>