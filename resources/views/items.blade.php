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
        <a class="select-item recommend" href="/">おすすめ</a>
        <a class="select-item favorite" href="/favorite">マイリスト</a>
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

        @if (count($items) === 0)
        <div class="items-item">
            商品がありません
        </div>
        @endif
    </div>
</div>
@endsection