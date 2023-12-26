@extends('layouts.app')

@section('title-block')
    Читальный зал
@endsection

@section('content')
    <h1>Здравствуйте, вы находитесь в Читальном зале нашей библиотеки!</h1>
    @foreach ($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->name }}</h3>
            <p>{{ $elem->author }}</p>
            <p><small>{{ $elem->created_at }}</small></p>
            <a href="{{ route('book-getBook-one', $elem->id) }}"><button class="btn btn-warning">Подробнее</button></a>
        </div>
    @endforeach
@endsection
