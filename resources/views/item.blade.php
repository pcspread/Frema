@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="item-section">
    <div class="item-image">
        <img class="item-image__instance" src="{{ $item['image'] }}" alt="商品画像">
    </div>

    <div class="item-content">
        <div class="item-name">
            <h1 class="item-name__label">
                {{ $item['name'] }}
            </h1>
        </div>

        <div class="item-brand">
            <h3 class="item-brand__label">{{ $item->brand['brand'] }}</h3>
        </div>

        <div class="item-price">
            <p class="item-price__instance">¥{{ $item['price'] }}(値段)</p>
        </div>

        <div class="item-impression">
            <div class="item-favorite">
                <form class="item-favorite__form" action="
                ">
                    <button class="item-favorite__click">☆</button>
                </form>
                <p class="item-favotite__number">3</p>
            </div>
    
            <div class="item-comment">
                <a class="item-comment__click" href="/item/comment">💭</a>
                <p class="item-comment__number">3</p>
            </div>
        </div>

        <div class="purchase-button">
            <form class="purchase-button__form" action="/item/purchase" method="GET">
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
                    @foreach ($item->categories as $category)
                    <li class="item-category__record">{{ $category['category'] }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="item-condition">
                <h3 class="item-condition__title">商品の状態</h3>
                <p class="item-comdition__instance">{{ $item->condition['condition'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection