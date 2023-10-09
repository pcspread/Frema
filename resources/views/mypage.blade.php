@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="items-section">
    <div class="firstView">
        <div class="firstView-information">
            <img class="firstView-information_image" src="https://dummyimage.com/100x100/000/0011ff" alt="">
            <h1 class="firstView-information__name">ユーザー名</h1>
        </div>
        <div class="firstView-click">
            <a class="firstView-click__instance" href="/mypage/edit">プロフィールを編集</a>
        </div>
    </div>

    <div class="select">
        <p class="select-item recommend">出品した商品</p>
        <p class="select-item mine">購入した商品</p>
    </div>
    <div class="items">
        <ul class="items-list">
            @for ($i = 0; $i < 11; $i++)
            <li class="items-item">
                <img class="item__image" src="https://dummyimage.com/30x30/000/0011ff" alt="商品画像">
                <a class="item-link" href="/item">商品</a>
            </li>
            @endfor
        </ul>
    </div>
</div>
@endsection