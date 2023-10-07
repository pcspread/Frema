@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-section">
    <h1 class="login-title">ログイン</h1>

    <div class="login-form">
        <div class="login-item">
            <label class="login-item__title" for="email">メールアドレス</label>
            <input class="login-item__input" id="email" type="text" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
            <p class="login-item__error"></p>
        </div>
        
        <div class="login-item">
            <label class="login-item__title" for="password">パスワード</label>
            <input class="login-item__input" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="入力欄">
            <p class="login-item__error"></p>
        </div>

        <div class="login-buttons">
            <button class="login-button">ログインする</button>
            <a class="login-click__register" href="/register">会員登録はこちら</a>
        </div>
    </div>
</div>
@endsection