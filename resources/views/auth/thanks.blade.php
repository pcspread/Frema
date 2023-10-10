@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-section">
    <h1 class="thanks-title">登録完了</h1>

    <div class="thanks-content">
        <p class="thanks-item__text">
            会員登録が完了しました。<br />
        </p>
    </div>
    
    <div class="thanks-button">
        <a class="thanks-click" href="/login">ログインへ</a>
    </div>
</div>
@endsection