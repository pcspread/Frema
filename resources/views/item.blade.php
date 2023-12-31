@php
use App\Models\Favorite;
@endphp
@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="item-section">
    <div class="item-image">
        <img class="item-image__instance" src="@if (!empty($item->image)) {{ asset('storage/' . $item->image) }} @else https://dummyimage.com/100x100/CCC/CCC    @endif" alt="商品画像">
    </div>

    <div class="item-content">
        <div class="item-name">
            <h1 class="item-name__label">
                {{ $item['name'] }}
            </h1>
        </div>

        <div class="item-brand">
            <h3 class="item-brand__label">{{ $item->brand['name'] }}</h3>
        </div>

        <div class="item-price">
            <p class="item-price__instance">¥{{ number_format($item['price']) }}(値段)</p>
        </div>

        @if (Auth::check())
        <div class="item-impression">
            <div class="item-favorite">
                <form class="item-favorite__form" action="/item/{{ $item['id'] }}
                " method="POST">
                @csrf
                    @if (empty(Favorite::where('user_id', Auth::id())->where('item_id', $item['id'])->first()))
                    <button class="item-favorite__click">☆</button>
                    @else
                    <button class="item-favorite__click favorite">★</button>
                    @endif
                </form>
                <p class="item-favotite__number">{{ $favorite }}</p>
            </div>
    
            <div class="item-comment">
                <a class="item-comment__click" href="/item/{{ $item['id'] }}/comment">💭</a>
                <p class="item-comment__number">{{ $comment }}</p>
            </div>
        </div>
        @endif

        <div class="purchase-button">
            <form class="purchase-button__form" action="/item/{{ $item['id'] }}/purchase" method="GET">
                <button class="purchase-button__instance">購入する</button>
            </form>
        </div>

        <div class="item-description">
            <h2 class="item-description__title">
                商品説明
            </h2>
            <p class="item-description__instance">
                {{ $item['content'] }}
            </p>
        </div>

        <div class="item-information">
            <h2 class="item-information-title">商品の情報</h2>
            <div class="item-category">
                <h3 class="item-category__title">カテゴリー</h3>
                <ul class="item-category__list">
                    <li class="item-category__record">{{ $item->category['name'] }}</li>
                    <li class="item-category__record">{{ $item['gender'] }}</li>
                </ul>
            </div>

            <div class="item-condition">
                <h3 class="item-condition__title">商品の状態</h3>
                <p class="item-comdition__instance">{{ $item->condition['name'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection