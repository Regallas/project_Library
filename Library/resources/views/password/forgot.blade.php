@extends('layouts.app')

@section('title-block')
    Сброс пароля
@endsection

@section('content')
    <h1>Вы находитесь в разделе сброса пароля.</h1>

    <form action="{{ route('forget.password.post') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Введите e-mail:</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Введите email" id=email
                class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Получить ссылку на сброс пароля</button>
    </form>
@endsection
