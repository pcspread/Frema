@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="item-section">
    <div class="item-image">
        <img class="item-image__instance" src="https://dummyimage.com/150x200/000/0011ff" alt="商品画像">
    </div>

    <div class="item-content">
        <div class="item-name">
            <h1 class="item-name__label">
                商品名
            </h1>
            <p class="item-name__instance">ウォーターブリーズ</p>
        </div>

        <div class="item-brand">
            <h3 class="item-brand__label">ブランド名</h3>
            <p class="item-brand__instance">ウォーター</p>
        </div>

        <div class="item-price">
            <p class="item-price__instance">¥47,000(値段)</p>
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
                <a class="item-comment__click" href="">💭</a>
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
                カラー：グレー
                商品の状態は良好です。傷もありません。
                購入後、即発送いたします。
            </p>
        </div>

        <div class="item-information">
            <h2 class="item-information-title">商品の情報</h2>
            <div class="item-category">
                <h3 class="item-category__title">カテゴリー</h3>
                <ul class="item-category__list">
                    <li class="item-category__record">洋服</li>
                    <li class="item-category__record">メンズ</li>
                </ul>
            </div>

            <div class="item-condition">
                <h3 class="item-condition__title">商品の状態</h3>
                <p class="item-comdition__instance">良好</p>
            </div>
        </div>
    </div>
</div>
@endsection