@extends('layouts.main')

@section('title')
 {{$title}}
@endsection

@section('main')
    <div class="post__continer">

        <div class="container">
            <div class="posts-list main__post">
                <article id="post-1" class="post">

                    <div class="post_list_info">
                        <div class="post_author_img"><img src="{{ asset('css/gentleman.svg') }}" alt=""></div>
                        <div class="post-author-name">{{$info[0]->name}}</div>
                        <div class="post__time">{{$info[0]->date}} </div>
                    </div>

                    <h1 class="post-title">{{$info[0]->title}}</h1>
                    <div class="category"><a href="">{{$info[0]->category}}</a></div>

                    <div class="text">
                                                    @php
                                                       echo htmlspecialchars_decode($info[0]->text);
                                                    @endphp
                    </div>


                    <div class="post-content">

                        <div class="post-footer">
                            <div class="post-social">
                                <a ><i class="fas fa-eye"></i></a> {{$info[0]->view_count}}
                                <a ><i class="fa fa-comment"></i></a> 0
                                <a ><i class="far fa-thumbs-up"></i></a> {{$info[0]->like_count}}
                            </div>
                        </div>
                    </div>
                </article>
            </div> <!-- конец div class="posts-list"-->
        </div> <!-- конец div class="container"-->
    </div>
@endsection
