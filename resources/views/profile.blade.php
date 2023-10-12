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

    <form class="profile-form" action="/mypage/profile" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="profile-image">
            <img class="profile-image__instance" src="@if ($user->image) {{ asset('storage/' . $user->image) }} @else https://dummyimage.com/100x100/000/000 @endif" alt="商品画像">
            <input class="profile-image__click" type="file" name="image">
            <button class="profile-image__click-button" type="button">画像を選択する</button>
        </div>
        @error('image')
        <p class="profile-item__error">
            {{ $errors->first('image') }}
        </p>
        @enderror

        <div class="profile-item">
            <label class="profile-item__title" for="name">ユーザー名</label>
            <input class="profile-item__input" id="name" type="text" name="name" value="{{ empty($user['name']) ? old('name') : $user['name'] }}" placeholder="入力欄" autofocus>
            <p class="profile-item__error">
            @error('name')
                {{ $errors->first('name') }}
            @enderror
            </p>
        </div>

        <div class="profile-item">
            <label class="profile-item__title" for="postcode">郵便番号</label>
            <input class="profile-item__input" id="postcode" type="text" name="postcode" value="{{ empty($user['postcode']) ? old('postcode') : $user['postcode'] }}" placeholder="入力欄" autofocus>
            <p class="profile-item__error">
            @error('postcode')
                {{ $errors->first('postcode') }}
            @enderror
            </p>
        </div>

        <div class="profile-item">
            <label class="profile-item__title" for="address">住所</label>
            <input class="profile-item__input" id="address" type="text" name="address" value="{{ empty($user['address']) ? old('address') : $user['address'] }}" placeholder="入力欄" autofocus>
            <p class="profile-item__error">
            @error('address')
                {{ $errors->first('address') }}
            @enderror
            </p>
        </div>
        
        <div class="profile-item">
            <label class="profile-item__title" for="building">建物名</label>
            <input class="profile-item__input" id="building" type="text" name="building" value="{{ empty($user['building']) ? old('building') : $user['building'] }}" placeholder="入力欄">
            <p class="profile-item__error">
            @error('building')
                {{ $errors->first('building') }}
            @enderror
            </p>
        </div>

        <div class="profile-buttons">
            <button class="profile-button">変更する</button>
        </div>
    </form>
</div>
@endsection