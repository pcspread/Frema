@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks_purchase.css') }}">
@endsection

@section('content')
<div class="email-section">
    <h1 class="email-title">購入詳細メール送信</h1>

    <div class="email-content">
        <p class="email-item__text">
            購入いただきありがとうございます。<br />
            登録のメールアドレスに購入詳細メールを送信しました。内容を確認の上、支払いをお願いします。
        </p>
    </div>
</div>
@endsection