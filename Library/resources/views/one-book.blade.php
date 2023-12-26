@extends('layouts.app')

@section('title-block')
    {{ $data->name }}
@endsection

@section('content')
    <h1>{{ $data->name }}</h1>
    <div class="alert alert-info">
        <p>{{ $data->author }}</p>
        <p>{{ $data->description }}</p>
        <p>{{ $data->price }}</p>
        <p>{{ $data->pageCount }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('book-update', $data->id) }}">
            <button class="btn btn-primary">
                Редактировать</button></a>
        <a href="{{ route('book-delete', $data->id) }}">
            <button class="btn btn-danger">
                Удалить</button></a>
    </div>
@endsection
