@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/sell.js') }}" defer></script>
@endsection

@section('content')
<div class="sell-section">
    <h1 class="sell-title">商品の出品</h1>

    <h2 class="sell-image__title" for="">
        商品画像
    </h2>
    <div class="sell-image__select">
        <input class="sell-image__click" type="file" value="画像を選択する">
        <button class="sell-image__click-button">ファイル選択</button>
    </div>

    <div class="sell-form">
        <h2 class="sell__sub-title">
            商品の詳細
        </h2>
        <div class="sell-item">
            <label class="sell-item__title" for="name">カテゴリー</label>
            <div class="sell-item__select-wrapper">
                <select class="sell-item__select" name="" id="">
                    <option class="sell-item__option" value="">カテゴリー</option>
                </select>
            </div>
            <p class="sell-item__error"></p>
        </div>

        <div class="sell-item">
            <label class="sell-item__title" for="postcode">商品の状態</label>
            <div class="sell-item__select-wrapper">
                <select class="sell-item__select" name="" id="">
                    <option class="sell-item__option" value="">良好</option>
                </select>
            </div>
            <p class="sell-item__error"></p>
        </div>

        <h2 class="sell__sub-title">
            商品の詳細
        </h2>

        <div class="sell-item">
            <label class="sell-item__title" for="address">商品名</label>
            <input class="sell-item__input" id="address" type="text" name="address" value="{{ old('address') }}" placeholder="入力欄">
            <p class="sell-item__error"></p>
        </div>
        
        <div class="sell-item">
            <label class="sell-item__title" for="building">商品の説明</label>
            <input class="sell-item__input" id="building" type="password" name="building" value="{{ old('building') }}" placeholder="入力欄">
            <p class="sell-item__error"></p>
        </div>
        
        <h2 class="sell__sub-title">
            販売価格
        </h2>

        <div class="sell-item">
            <label class="sell-item__title" for="building">商品の説明</label>
            <input class="sell-item__input" id="building" type="password" name="building" value="{{ old('building') }}" placeholder="入力欄">
            <p class="sell-item__error"></p>
        </div>

        <div class="sell-buttons">
            <button class="sell-button">出品する</button>
        </div>
    </div>
</div>
@endsection