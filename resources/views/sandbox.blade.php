@extends('layouts.main')
@section("title")
    Публикация
@endsection

@section('main')
    <div class="container">
        <form action="" method="get">
            <select name="post">
                <option value="article">Статья</option>
                <option value="news">Новости</option>
            </select>
            <br>
            <input type="text" name="title" placeholder="title">
            <br>
            <input type="text" name="category" placeholder="category">
            <br>
            <textarea class="tm-editor__textarea tm-editor__textarea_huge" id="editor" cols="30" rows="7" id="text_textarea" name="text"
            ></textarea>
            <a onclick = "add('b')">b</a>
            <a onclick = "add('h1')">h</a>
            <br>
            <input type="text" name="preview" placeholder="preview">
            <br>
            <button type="submit" >Submit</button>
        </form>
    </div>

    <script src="{{ asset('js/test.js') }}"></script>
@endsection
