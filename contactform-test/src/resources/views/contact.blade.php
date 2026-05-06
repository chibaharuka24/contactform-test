@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('title')
<h1 class="title">Contact</h1>
@endsection

@section('content')
<div class="contact">
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <div class="name">
            <p class="item required">お名前</p>
            <div class="width name1">
                <input class="name2" type="text" name="first_name" value="{{ old('first_name')}}" placeholder="例: 山田">
                <input class="name2" type="text" name="last_name" value="{{ old('last_name')}}" placeholder="例: 太郎">
            </div>
        </div>
        <div class="error">
            @error('first_name')
            {{ $message }}
            @enderror
        </div>
        <div class="error">
            @error('last_name')
            {{ $message }}
            @enderror
        </div>
        <div class="gender">
            <p class="item required">性別</p>
            <div class="width">
                <input type="radio" name="gender" value="1" checked>男性
                <input type="radio" name="gender" value="2">女性
                <input type="radio" name="gender" value="3">その他
            </div>
        </div>
        <div class="error">
            @error('gender')
            {{ $message }}
            @enderror
        </div>
        <div class="email">
            <p class="item required">メールアドレス</p>
            <div class="width">
                <input class="width100" type="text" name="email" value="{{ old('email')}}" placeholder="例: test@example.com">
            </div>
        </div>
        <div class="error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="tel">
            <p class="item required">電話番号</p>
            <div class="width">
                <input class="fulltel" type="text" name="tel1" value="{{ old('tel1')}}" placeholder="080">
                <a>-</a>
                <input class="fulltel" type="text" name="tel2" value="{{ old('tel2')}}" placeholder="1234">
                <a>-</a>
                <input class="fulltel" type="text" name="tel3" value="{{ old('tel3')}}" placeholder="5678">
            </div>
        </div>
        <div class="error">
            @error('tel')
            {{ $message }}
            @enderror
        </div>
        <div class="address">
            <p class="item required">住所</p>
            <div class="width">
                <input class="width100" type="text" name="address" value="{{ old('address')}}" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
        </div>
        <div class="error">
            @error('address')                        {{ $message }}
            @enderror
        </div>
        <div class="building">
            <p class="item">建物名</p>
            <div class="width">
                <input class="width100" type="text" name="building" value="{{ old('building')}}" placeholder="例: 千駄ヶ谷マンション101">
            </div>
        </div>
        <div class="category">
            <p class="item required">お問い合わせの種類</p>
            <div class="width">
                <select class="category" name="category_id">
                    <option>選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="error">
            @error('category_id')
            {{ $message }}
            @enderror
        </div>
        <div class="detail">
            <p class="item required">お問い合わせ内容</p>
            <div class="width">
                <textarea type="text" name="detail" value="{{ old('detail')}}" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
        </div>
        <div class="error">
            @error('detail')
            {{ $message }}
            @enderror
        </div>
        <div class="confirm__button">
            <button class="confirm__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>





@endsection