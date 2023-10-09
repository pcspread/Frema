@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/logout.css') }}">
@endsection

@section('content')
<div class="logout-section">
    <h1 class="logout-title">ログアウト</h1>

    <div class="logout-content">
        <p class="logout-item__text">
            ログアウトしました。<br />
            ご利用ありがとうございました。
        </p>
    </div>
    
    <div class="logout-button">
        <a class="logout-click" href="/">商品一覧へ</a>
    </div>
</div>
@endsection