@extends('layouts.app')

@section('title-block')
    Редактирование книги
@endsection

@section('content')
    <h1>Вы находитесь в разделе редактирования книг.</h1>

    <form action="{{ route('book-update-submit', $data->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Введите название:</label>
            <input type="text" name="name" value = "{{ $data->name }}" placeholder="Введите название" id=name
                class="form-control">
        </div>

        <div class="form-group">
            <label for="author">Введите автора:</label>
            <input type="text" name="author" value = "{{ $data->author }}" placeholder="Введите автора" id=author
                class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Описание:</label>
            <textarea name="description" id="description" class="form-control"
                placeholder="Введите описание">{{ $data->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Введите цену:</label>
            <input type="text" name="price" value = "{{ $data->price }}" placeholder="Введите цену" id=price
                class="form-control">
        </div>

        <div class="form-group">
            <label for="pageCount">Введите количество страниц:</label>
            <input type="text" name="pageCount" value = "{{ $data->pageCount }}" placeholder="Введите количество страниц"
                id=pageCount class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Обновить книгу</button>
    </form>
@endsection
