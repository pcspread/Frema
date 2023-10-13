@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/mypage.js') }}" defer></script>
@endsection

@section('content')
<div class="items-section">
    <div class="firstView">
        <div class="firstView-information">
            <img class="firstView-information_image" src="@if ($user->image) {{ asset('storage/' . $user->image) }} @else https://dummyimage.com/100x100/000/000 @endif" alt="">
            <h1 class="firstView-information__name">{{ (empty($user['name'])) ? 'ユーザー名が設定されていません' : $user['name'] }}</h1>
        </div>
        <div class="firstView-click">
            <a class="firstView-click__instance" href="/mypage/profile">プロフィールを編集</a>
        </div>
    </div>

    <div class="select">
        <a class="select-item recommend" href="/mypage">出品した商品</a>
        <a class="select-item purchase" href="/mypage/purchase">購入した商品</a>
    </div>
    
    <div class="items">
        @foreach ($items as $item)
        <div class="items-item">
            <img class="item__image" src="@if (!empty($item->image)) {{ asset('storage/' . $item->image) }} @else https://dummyimage.com/100x100/CCC/CCC @endif" alt="商品画像">
            <p class="item-price">¥{{ number_format($item['price']) }}</p>
            <a class="item-link" href="/item/{{ $item['id'] }}">
                【{{ $item->brand['name'] }}】{{ $item->category['name'] }} {{ $item['gender'] }} 「{{ $item['name'] }}」
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection