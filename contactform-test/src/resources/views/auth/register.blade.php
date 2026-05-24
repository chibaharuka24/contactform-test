@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('title')
<h1 class="title">Register</h1>
@endsection

@section('content')

<div class="register">
    <form class="register-form" action="/register" method="post">
        @csrf
        <div class="form">
            <div class="item">
                <div class="name">お名前</div>
            </div>
            <div class="input">
                <input class="input-text" type="text" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}" />
            </div>
            <div class="error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form">
            <div class="item">
                <div class="email">メールアドレス</div>
            </div>
            <div class="input">
                <input class="input-text" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form">
            <div class="item">
                <div class="password">パスワード</div>
            </div>
            <div class="input">
                <input class="input-text" type="password" name="password" placeholder="例: coachtech1106" value="{{ old('password') }}" />
            </div>
            <div class="error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="button">
            <button class="button-submit" type="submit">登録</button>
        </div>
    </form>
</div>



@endsection