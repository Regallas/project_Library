@extends('layouts.app')

@section('title-block')
    Новый пароль
@endsection

@section('content')
    <h1>Вы находитесь в разделе установки нового пароля.</h1>

    <form action="{{ route('reset.password.post') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

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
            <label for="password">Подтвердите пароль:</label>
            <input type="password" name="password-confirmation" placeholder="Введите пароль" id=password
                class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Поменять пароль</button>
    </form>
@endsection
