@extends('layouts.app')

@section('title-block')
    Авторизация
@endsection

@section('content')
    <h1>Вы находитесь в разделе авторизации.</h1>

    <form action="{{ route('login-form') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Введите e-mail:</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Введите email" id=email
                class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Введите пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" id=password class="form-control">
        </div>
        <div class="form-group">
            <a href="{{ route('vk.auth') }}">Вход через ВК</a>
            <input type="checkbox" name="remember"> Запомнить меня
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
        <a class="btn btn-primary ml-2" href="{{ route('registration-form') }}">Регистрация</a>
        <a class="btn btn-primary ml-2" href="{{ route('forget.password.post') }}">Сброс пароля</a>
    </form>
@endsection


{{-- @section('aside')
    @parent
    <div id="vk_auth"></div>
    <script type="text/javascript">
        VK.Widgets.Auth("vk_auth", {
            authUrl: "http://localhost:8000/login"
        });
    </script>
@endsection --}}
