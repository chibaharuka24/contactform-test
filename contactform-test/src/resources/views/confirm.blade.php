@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title')
<h1 class="title">Confirm</h1>
@endsection

@section('content')
<form class="confirm-form" action="/thanks" method="post">
    @csrf
    <table class="contact-table">
        <tr>
            <td class="item">お名前</td>
            <td class="confirm">
                <input type="hidden" name="first_name" value="{{ $contact['first_name']}}">{{ $contact['first_name']}}
                <input type="hidden" name="last_name" value="{{ $contact['last_name']}}">{{ $contact['last_name']}}
            </td>
        </tr>
        <tr>
            <td class="item">性別</td>
            <td class="confirm">
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
                ?>
            </td>
        </tr>
        <tr>
            <td class="item">メールアドレス</td>
            <td class="confirm">
                <input type="hidden" name="email" value="{{ $contact['email']}}">{{ $contact['email']}}
            </td>
        </tr>
        <tr>
            <td class="item">電話番号</td>
            <td class="confirm">
                <input type="hidden" name="tel1" value="{{ $contact['tel1']}}">{{ $contact['tel1']}}
                <input type="hidden" name="tel2" value="{{ $contact['tel2']}}">{{ $contact['tel2']}}
                <input type="hidden" name="tel3" value="{{ $contact['tel3']}}">{{ $contact['tel3']}}
            </td>
        </tr>
        <tr>
            <td class="item">住所</td>
            <td class="confirm">
                <input type="hidden" name="address" value="{{ $contact['address']}}">{{ $contact['address']}}
            </td>
        </tr>
        <tr>
            <td class="item">建物名</td>
            <td class="confirm">
                <input type="hidden" name="building" value="{{ $contact['building']}}">{{ $contact['building']}}
            </td>
        </tr>
        <tr>
            <td class="item">お問い合わせの種類</td>
            <td class="confirm">
                <input type="hidden" name="category_id" value="{{ $input['category_id']}}">{{ $categoryContent }}
            </td>
        </tr>
        <tr>
            <td class="item">お問い合わせ内容</td>
            <td class="confirm">
                <input type="hidden" name="detail" value="{{ $contact['detail']}}">{{ $contact['detail']}}
            </td>
        </tr>
    </table>
    <div class="button-group">
        <div class="button">
            <button class="button-submit" type="submit">送信</button>
        </div>
        <div class="correction">
            <a href="/">修正</a>
        </div>
    </div>
</form>
@endsection