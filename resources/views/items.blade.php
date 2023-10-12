@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/items.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/items.js') }}" defer></script>
@endsection

@section('content')
<div class="items-section">
    <div class="select">
        <p class="select-item recommend">おすすめ</p>
        <p class="select-item mine">マイリスト</p>
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