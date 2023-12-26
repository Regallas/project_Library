@extends('layouts.app')

@section('title-block')
    Регистрация
@endsection

@section('content')
    <h1>Вы находитесь в разделе регистрации.</h1>

    <form action="{{ route('registration-form') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя:</label>
            <input type="text" name="name" placeholder="Введите имя" id=name class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите e-mail:</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Введите email" id=email class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Введите пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" id=password class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
@endsection
