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

    <form class="sell-form" action="/sell" method="POST" enctype="multipart/form-data">
    @csrf
        <h2 class="sell-image__title" for="">
            商品画像
        </h2>
        
        <div class="sell-image">
            <img class="sell-image__instance" src="@if (!empty($item->image)) {{ asset('storage/' . $item->image) }} @else https://dummyimage.com/100x100/000/000 @endif" alt="商品画像">
        </div>

        <div class="sell-image__select">
            <input class="sell-image__click" type="file" name="image">
            <button class="sell-image__click-button" type="button">ファイル選択</button>
        </div>

        @error('image')
        <p class="sell-item__error">
                {{ $errors->first('image') }}
        </p>
        @enderror

        <h2 class="sell__sub-title">
            商品の詳細
        </h2>
        <div class="sell-item">
            <label class="sell-item__title" for="name">ブランド名</label>
            <div class="sell-item__select-wrapper">
                <select class="sell-item__select" name="brand">
                    @foreach ($brands as $brand)
                    <option class="sell-item__option" value="{{ $brand['name'] }}">{{ $brand['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <p class="sell-item__error"></p>
        </div>

        <div class="sell-item">
            <label class="sell-item__title" for="new_brand">新規ブランドを追加</label>
            <input class="sell-item__input" id="new_brand" type="text" name="new_brand" value="{{ old('new_brand') }}" placeholder="入力欄">
            <p class="sell-item__error">
                @error('new_brand')
                    {{ $errors->first('new_brand') }}
                @enderror
            </p>
        </div>

        <div class="sell-item">
            <label class="sell-item__title" for="name">カテゴリー１</label>
            <div class="sell-item__select-wrapper">
                <select class="sell-item__select" name="gender">
                    <option class="sell-item__option" value="メンズ">メンズ</option>
                    <option class="sell-item__option" value="レディース">レディース</option>
                </select>
            </div>
            <p class="sell-item__error"></p>
        </div>

        <div class="sell-item">
            <label class="sell-item__title" for="name">カテゴリー２</label>
            <div class="sell-item__select-wrapper">
                <select class="sell-item__select" name="category">
                    @foreach ($categories as $category)
                    <option class="sell-item__option" value="{{ $category['name'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <p class="sell-item__error"></p>
        </div>

        <div class="sell-item">
            <label class="sell-item__title" for="postcode">商品の状態</label>
            <div class="sell-item__select-wrapper">
                <select class="sell-item__select" name="condition">
                    @foreach ($conditions as $condition)
                    <option class="sell-item__option" value="{{ $condition['name'] }}">{{ $condition['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <p class="sell-item__error"></p>
        </div>

        <h2 class="sell__sub-title">
            商品の詳細
        </h2>

        <div class="sell-item">
            <label class="sell-item__title" for="name">商品名</label>
            <input class="sell-item__input" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="入力欄">
            <p class="sell-item__error">
                @error('name')
                    {{ $errors->first('name') }}
                @enderror
            </p>
        </div>
        
        <div class="sell-item">
            <label class="sell-item__title" for="content">商品の説明</label>
            <input class="sell-item__input" id="content" type="text" name="content" value="{{ old('content') }}" placeholder="入力欄">
            <p class="sell-item__error">
                @error('content')
                    {{ $errors->first('content') }}
                @enderror
            </p>
        </div>
        
        <h2 class="sell__sub-title">
            販売価格
        </h2>

        <div class="sell-item">
            <label class="sell-item__title" for="price">販売価格</label>
            <div class="sell-item__price-group">
                <input class="sell-item__input price" id="price" type="text" name="price" value="{{ old('price') }}" placeholder="入力欄">
                <span class="sell-item__price-mark">¥</span>
            </div>
            <p class="sell-item__error">
                @error('price')
                    {{ $errors->first('price') }}
                @enderror
            </p>
        </div>

        <div class="sell-buttons">
            <button class="sell-button">出品する</button>
        </div>
    </form>
</div>
@endsection