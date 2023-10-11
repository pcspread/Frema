@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="items-section">
    <div class="firstView">
        <div class="firstView-information">
        <img class="firstView-information_image" src="@if ($user->image) {{ asset('storage/' . $user->image) }} @else https://dummyimage.com/100x100/000/000 @endif" alt="">
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
        @foreach ($items as $item)
        <div class="items-item">
            <img class="item__image" src="{{ $item['image'] }}" alt="商品画像">
            <p class="item-price">¥{{ $item['price'] }}</p>
            <a class="item-link" href="/item/{{ $item['id'] }}">
                【{{ $item->brand['name'] }}】{{ $item->category['name'] }} {{ $item['gender'] }} 「{{ $item['name'] }}」
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection