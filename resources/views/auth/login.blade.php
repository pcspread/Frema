@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-section">
    <h1 class="login-title">ログイン</h1>

    <form class="login-form" action="/login" method="POST" novalidate>
    @csrf
        <div class="login-item">
            <label class="login-item__title" for="email">メールアドレス</label>
            <input class="login-item__input" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="入力欄" autofocus>
            <p class="login-item__error">
            @error('email')
                {{ $errors->first('email') }}
            @enderror
            </p>
        </div>
        
        <div class="login-item">
            <label class="login-item__title" for="password">パスワード</label>
            <input class="login-item__input" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="入力欄">
            <p class="login-item__error">
            @error('password')
                {{ $errors->first('password') }}
            @enderror
            </p>
        </div>

        <div class="login-buttons">
            <button class="login-button">ログインする</button>
            <a class="login-click__register" href="/register">会員登録はこちら</a>
        </div>
    </ｆ>
</div>
@endsection