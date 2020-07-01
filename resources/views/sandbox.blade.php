@extends('layouts.main')
@section("title")
    Публикация
@endsection

@section('main')
    <div class="add__Post">
    <div class="container">
        <form action="" method="Post">
            @csrf
            <div class="select__post">
                <select name="post" >
                    <option value="article">Статья</option>
                    <option value="news">Новости</option>
                </select>
            </div>

            <div class="profile__name post__input">
                <input type="text" id="Name" name="title" required autocomplete="off" /><label for="email">Title</label>
            </div>

            <div class="profile__name post__input">
                <input type="text" id="Name" name="category" required autocomplete="off" /><label for="email">Category</label>
            </div>

            <div class="text__editor">
                <p>Текст:</p>
                <div class="text_add">
                    <div class="add__tag">
                        <ul>
                            <li><a onclick = "add('h2')">h2</a></li>
                            <li><b><a onclick = "add('b')">b</a></b></li>
                            <li><i><a onclick = "add('i')">I</a></i></li>
                            <li><u><a onclick = "add('u')">U</a></u></li>
                            <li><s><a onclick = "add('s')">S</a></s></li>
                        </ul>
                    </div>
                    <textarea class="tm-editor__textarea tm-editor__textarea_huge" id="editor" cols="30" rows="7" id="text_textarea" name="text"></textarea>
                </div>
            </div>
            <div class="profile__name post__input">
                <input type="text" id="Name" name="preview" required autocomplete="off" /><label for="email">Preview</label>
            </div>

            <div class="text__form__submit">
                <button type="submit" class="text__submit" >Опубликовать</button>
            </div>
        </form>
    </div>
    </div>

    <script src="{{ asset('js/test.js') }}"></script>
@endsection
