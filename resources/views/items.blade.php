@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/items.css') }}">
@endsection

@section('content')
<div class="items-section">
    <div class="select">
        <p class="select-item recommend">おすすめ</p>
        <p class="select-item mine">マイリスト</p>
    </div>
    <div class="items">
        <ul class="items-list">
            @for ($i = 0; $i < 11; $i++)
            <li class="items-item">
                <img class="item__image" src="https://dummyimage.com/30x30/000/0011ff" alt="商品画像">
                <a class="item-link" href="/item">商品</a>
            </li>
            @endfor
        </ul>
    </div>
</div>
@endsection