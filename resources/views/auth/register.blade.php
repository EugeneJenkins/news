@extends('layouts.main')
@section('title')
    Регистрация
@endsection
@section('main')
<div class="container">
    <div class="signupform">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="formtitle">
                <p><b>Регистрация</b></p>
            </div>
            <div class="reg__input">
                <div class="reg__nick">
                    <input id="name" type="text" placeholder="Никнейм" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="reg__email">
                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="reg__pass">
                    <input id="password" placeholder="Пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="reg__pass">
                    <input id="password-confirm" placeholder="Пароль ещё раз" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form__submit">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
