@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
<div class="address-section">
    <h1 class="address-title">住所の変更</h1>

    <div class="address-form">
        <div class="address-item">
            <label class="address-item__title" for="postcode">郵便番号</label>
            <input class="address-item__input" id="postcode" type="text" name="postcode" value="{{ old('postcode') }}" placeholder="入力欄" autofocus>
            <p class="address-item__error"></p>
        </div>
        
        <div class="address-item">
            <label class="address-item__title" for="address">住所</label>
            <input class="address-item__input" id="address" type="text" name="address" value="{{ old('address') }}" placeholder="入力欄">
            <p class="address-item__error"></p>
        </div>
        
        <div class="address-item">
            <label class="address-item__title" for="building">建物名</label>
            <input class="address-item__input" id="building" type="text" name="building" value="{{ old('building') }}" placeholder="入力欄">
            <p class="address-item__error"></p>
        </div>

        <div class="address-buttons">
            <button class="address-button">更新する</button>
        </div>
    </div>
</div>
@endsection