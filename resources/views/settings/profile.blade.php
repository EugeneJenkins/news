@extends('layouts.main')
@section('main')
    <div class="container">
        <div class="info">
            <div class="info__bar">
                <a class="info__link" href="{{ route('profile') }}">Профиль</a>
                <a class="info__link" href="/user/account">Аккаунт</a>
            </div>
            <hr />
        </div>
        <div class="info__profile">
            <div class="info_title">Настройки профиля</div>
                <form method="get" action="{{ route('profile') }}">
{{--                    @csrf--}}
                    <div class="profile__name">
                        <input type="text" id="Name" name="name"  required autocomplete="off" /><label for="email">Изменить имя</label>
                    </div>

                    <div class="select__gender">
                        <p>Ваш пол</p>
                        <select name="gender">
                            <option value="None">Другой</option>
                            <option value="man">Мужчина</option>
                            <option value="woman">Женщина</option>
                        </select>
                    </div>
                    <div class="select__birthday">
                        <p>Дата рождения</p>
                <select name="day">
                    <option value="None">None</option>
                    @for($i=1;$i<=31;$i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                <select name="month">
                    <option value="None">None</option>
                    @foreach($month as $month)
                    <option value="{{$month}}">{{$month}}</option>
                    @endforeach
                </select>
                <select name="year">
                    <option value="None">None</option>
                    @for($i=date('Y');$i>=1950;$i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                    </div>
                    <div class="profile__form__submit">
                <button type="submit" class="profile__submit" >Изменить</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
