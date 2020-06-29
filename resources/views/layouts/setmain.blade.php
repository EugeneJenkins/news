<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link
        rel="stylesheet"
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
<header>
    <div class="container">
        <div class="header__title"><a href="/">Fast News</a></div>
        @auth
            <div class="become_an_Author"><a href="/author">Стать автором</a></div>
        @endauth


        <form action="" method="POST" class="searchform">
            <input type="text" placeholder="Искать на сайте..." />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>

<div class="container">
    <div class="info">
        <div class="info__bar">
            <a class="info__link" href="{{ route('profile') }}">Профиль</a>
            <a class="info__link" href="/user/account">Аккаунт</a>
        </div>
    </div>
@yield('main')

<footer>
    <div class="container">
        <div class="footer-col"><span>Мой блог © 2016</span></div>
        <div class="footer-col">
            <div class="social-bar-wrap">
                <a title="Facebook" href="" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a title="Twitter" href="" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a title="Pinterest" href="" target="_blank"
                ><i class="fab fa-pinterest"></i>
                </a>
                <a title="Instagram" href="" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="footer-col">
            <a href="mailto:admin@yoursite.ru">Написать письмо</a>
        </div>
    </div>
</footer>
</body>
</html>
