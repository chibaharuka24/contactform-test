@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <form class="login-form" action="/login" method="post">
        @csrf
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
            <button class="button-submit" type="submit">ログイン</button>
        </div>
    </form>