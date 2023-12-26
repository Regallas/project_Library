@extends('layouts.app')

@section('title-block')
    Холл
@endsection

@section('content')
    <h1>Здравствуйте, вы находитесь в холле нашей библиотеки!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iusto quae, sunt quasi tempora quod, dolore id nemo
        nisi veniam dolores voluptatum nesciunt illum repellendus laboriosam at facilis, cum vero.</p>
@endsection

@section('aside')
    @parent
    <p>text</p>
@endsection
