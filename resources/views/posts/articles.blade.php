@extends('layouts.main')

@section('title')
    Новости
@endsection

@section('main')
    <div class="post__continer">
        <div class="container">
                <div class="posts-list">
                    @foreach($article as $article)
                    <article id="post-1" class="post">

                        <div class="post_list_info">
                            <div class="post_author_img"><img src="{{ asset('css/gentleman.svg') }}" alt=""></div>
                            <div class="post-author-name">{{$article->name}}</div>
                            <div class="post__time">{{$article->date}} </div>
                        </div>

                        <h1 class="post-title">{{$article->title}}</h1>

                        <div class="post-content">
                            <div class="content">
                                {{$article->text}}
                            </div>
                            <div class="category"><a href="">{{$article->category}}</a></div>

                            <p>{{$article->preview}}</p>
                            <div class="post-footer">
                                <a class="more-link" href="">Продолжить чтение</a>
                                <div class="post-social">
                                    <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div> <!-- конец div class="posts-list"-->

            <aside>


                <div class="widget">
                    <h3 class="widget-title">Последние записи</h3>
                    <ul class="widget-posts-list">
                        <li>
                            <div class="post-image-small">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_slovar_rodnoy_prirodi.jpg"></a>
                            </div>
                            <h4 class="widget-post-title">Весна</h4>
                        </li>
                        <li>
                            <div class="post-image-small">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_Russia.jpg"></a>
                            </div>
                            <h4 class="widget-post-title">Лето</h4>
                        </li>
                        <li>
                            <div class="post-image-small">
                                <a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_rodnaya_priroda_osen.jpg"></a>
                            </div>
                            <h4 class="widget-post-title">Осень</h4>
                        </li>
                    </ul>
                </div>
            </aside>
        </div> <!-- конец div class="container"-->
    </div>
@endsection
