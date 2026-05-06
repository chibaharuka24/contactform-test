@extends('layouts.header2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('title')
<h1 class="title">Admin</h1>
@endsection

@section('content')

<form class="search" action="/search" method="get">
    <input class="name,email" type="text">
    <select class="gender">
        <option>性別</option>
        <option>男性</option>
        <option>女性</option>
        <option>その他</option>
    </select>
    <select class="category">
        <option>選択してください</option>
        @foreach($categories as $category)
        <option value="{{ $category['id'] }}">{{ $category['content']}}</option>
        @endforeach
    </select>
    <input class="date" type="date">
    <button class="search__button" type="submit">検索</button>
    <a href="/admin">リセット</a>
</form>


@endsection