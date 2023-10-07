@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="register-section">
    <h1 class="register-title">会員登録</h1>

    <div class="register-form">
        <div class="register-item">
            <label class="register-item__title" for="email">メールアドレス</label>
            <input class="register-item__input" id="email" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
            <p class="register-item__error"></p>
        </div>
        
        <div class="register-item">
            <label class="register-item__title" for="password">パスワード</label>
            <input class="register-item__input" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="入力欄">
            <p class="register-item__error"></p>
        </div>

        <div class="register-buttons">
            <button class="register-button">登録する</button>
            <a class="register-click__login" href="/login">ログインはこちら</a>
        </div>
    </div>
</div>
@endsection