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

<div class="subtitle">
    <div class="container">

        <div class="subtitle__navigation">
            <div class="nav">
                <a class="nav__link" href="/news">Новости</a>
                <a class="nav__link" href="/articles">Статьи</a>
                <a class="nav__link" href="#">Авторы</a>
            </div>

            <div class="subtitle__sign">
                <div class="nav__sign">
                    @auth
                        <a href="/user/profile">Home</a>
                        <div class="test">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a href="/post/add">пост</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @else
                        <a class="sign__link" href="/login">Войти</a>

                        @if (Route::has('register'))
                             <a class="sign__link" href="/register">Зарегистрироваться</a>
                        @endif
                    @endauth

                </div>
            </div>
        </div>
        <hr />
    </div><!--container-->
</div><!--subtitle -->

<main>
    @yield('main')
</main>

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
