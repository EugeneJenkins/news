<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}?22">

</head>
<body>

<div class="main">
    <div class="container">
        <form method="POST" action=" {{ route('login') }}" class="appointment-form" id="appointment-form">
            @csrf
            <h2><b>Login</b></h2>
            <div class="form-group-1">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-submit">
                <button type="submit" class="submit">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="sigup">
                <span>Don't have an account? </span><a href="/register"> Sign up</a>
            </div>
            <div class="home">
                <a href="/">Home</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
