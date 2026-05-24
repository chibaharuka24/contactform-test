@extends('layouts.app')

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

    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact['first_name'] }}  {{ $contact['last_name'] }}</td>
            <td>
                <input type="hidden" name="gender" value="{{ $contact['gender']}}">
                <?php
                $gender = $contact['gender'];

                switch($gender) {
                    case "1":
                    echo "男性";
                    break;
                    case "2":
                    echo "女性";
                    break;
                    case "3":
                    echo "その他";
                    break;
                }
                ?></td>
            <td>{{ $contact['email'] }}</td>
            <td>{{ $categoryContent }}</td>
            <td><button class="" type="">詳細</button></td>
        </tr>
        @endforeach
    </table>


@endsection