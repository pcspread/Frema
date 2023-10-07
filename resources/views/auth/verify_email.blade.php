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
        <a class="email-click" href="/send/email">メールの再送はこちら</a>
    </div>
</div>
@endsection