@extends('layouts.app')

@section('title-block')
    Смена пароля
@endsection

@section('content')
<h1>Забыли пароль?</h1>

Вы можете поменять его по этой ссылке:
<a href="{{ route('reset.password.get', $token) }}">Reset Password</a>
@endsection
