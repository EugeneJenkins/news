@extends('layouts.main')
@section('title')
    Стать автором
@endsection


@section('main')
    <div class="container">
        <div class="autorship">
            <div class="authorship__title">
                Правила сайта
            </div>
            <div class="authorship__rules">
                <ul>
                    <li>Rules</li>
                    <li>Rules</li>
                    <li>Rules</li>
                    <li>Rules</li>
                    <li>Rules</li>
                </ul>

            </div>

            <form action="/author/add" method="GET">
                <input type="submit">
            </form>
        </div>
    </div>
@endsection
