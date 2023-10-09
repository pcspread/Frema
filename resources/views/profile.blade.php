@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/profile.js') }}" defer></script>
@endsection

@section('content')
<div class="profile-section">
    <h1 class="profile-title">プロフィール設定</h1>

    <div class="profile-image">
        <img class="profile-image__instance" src="https://dummyimage.com/100x100/000/0011ff" alt="">
        <input class="profile-image__click" type="file">
        <button class="profile-image__click-button">画像を選択する</button>
    </div>

    <div class="profile-form">
        <div class="profile-item">
            <label class="profile-item__title" for="name">ユーザー名</label>
            <input class="profile-item__input" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="入力欄" autofocus>
            <p class="profile-item__error"></p>
        </div>

        <div class="profile-item">
            <label class="profile-item__title" for="postcode">郵便番号</label>
            <input class="profile-item__input" id="postcode" type="text" name="postcode" value="{{ old('postcode') }}" placeholder="入力欄" autofocus>
            <p class="profile-item__error"></p>
        </div>

        <div class="profile-item">
            <label class="profile-item__title" for="address">住所</label>
            <input class="profile-item__input" id="address" type="text" name="address" value="{{ old('address') }}" placeholder="入力欄" autofocus>
            <p class="profile-item__error"></p>
        </div>
        
        <div class="profile-item">
            <label class="profile-item__title" for="building">建物名</label>
            <input class="profile-item__input" id="building" type="password" name="building" value="{{ old('building') }}" placeholder="入力欄">
            <p class="profile-item__error"></p>
        </div>

        <div class="profile-buttons">
            <button class="profile-button">変更する</button>
        </div>
    </div>
</div>
@endsection