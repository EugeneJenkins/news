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
        <div class="info_title">Настройки акаунта</div>

        <div class="info__profile ">
            <form action="" method="get">
                <div class="profile__name info__account">
                    <input type="text" id="Name" name="email"  required autocomplete="off" /><label for="email">Email</label>
                </div>

                <div class="profile__name ">
                    <input type="password" id="Name" name="password"  required autocomplete="off" /><label for="email">Password</label>
                </div>
                <div class="profile__form__submit">
                    <button type="submit" class="profile__submit" >Изменить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
