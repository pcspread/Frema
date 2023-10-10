@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/verify_email.css') }}">
@endsection

@section('content')
<div class="email-section">
    <h1 class="email-title">認証メール送信</h1>

    <div class="email-content">
        <p class="email-item__text">
            入力されたメールアドレスに認証メールを送信しました。<br />
            メールアドレスを確認の上、本登録をお願いします。
        </p>
    </div>
    
    <div class="email-button">
        <form class="email-button__form" action="/verify/email" method="POST">
        @csrf
            <input class="email-button__input" type="hidden" name="email" value="{{ session('email') }}">
            <input class="email-button__input" type="hidden" name="token" value="{{ session('token') }}">
            <button class="email-button__click">メールの再送はこちら</button>
        </form>
    </div>
</div>
@endsection