@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase-section">
    <div class="purchase-content">
        <div class="purchase-image">
            <img class="purchase-image__instance" src="@if (!empty($item->image)) {{ asset('storage/' . $item->image) }} @else https://dummyimage.com/100x100/CCC/CCC @endif" alt="商品画像">
    
            <div class="purchase-image__sub">
                <div class="purchase-name">
                    <h1 class="purchase-name__label">{{ $item['name'] }}</h1>
                </div>
                <h3 class="purchase-price">¥{{ number_format($item['price']) }}</h3>
            </div>
        </div>

        <div class="purchase-method">
            <form class="purchase-method__form" action="/item/{{ $item['id'] }}/purchase" method="POST">
            @method('PATCH')
            @csrf
                <select class="purchase-method__select" name="method">
                    <option class="purchase-method__select-record" value="case1" @if (!empty($item['method']) && $item['method'] === 'コンビニ払い') selected @endif>コンビニ払い</option>
                    <option class="purchase-method__select-record" value="case2" @if (!empty($item['method']) && $item['method'] === '銀行振込') selected @endif>銀行振込</option>
                    <option class="purchase-method__select-record" value="case3" @if (!empty($item['method']) && $item['method'] === '現金払い') selected @endif>現金払い</option>
                </select>
                <button class="purchase-method__button">変更する</button>
            </form>
        </div>

        <div class="purchase-carry">
            <h2 class="purchase-carry__title">
                @if (empty(Auth::user()['address']))
                    配送先を選択してください
                @else
                    〒 {{ Auth::user()['postcode'] }}<br />
                    {{ Auth::user()['address'] }}<br />
                    {{ Auth::user()['building'] }}
                @endif
            </h2>
            <a class="purchase-carry__click" href="/item/{{ $item['id'] }}/address">変更する</a>
        </div>
    </div>

    <div class="purchase-result">
        <form class="purchase-result__form" action="/item/{{ $item['id'] }}/purchase" method="POST">
        @csrf
            <table class="purchase-result__table">
                <tr class="purchase-result__row">
                    <td class="purchase-result__title price">商品代金</td>
                    <td class="purchase-result__content">¥{{ number_format($item['price']) }}</td>
                </tr>
                <tr class="purchase-result__row">
                    <td class="purchase-result__title pay">支払い金額</td>
                    <td class="purchase-result__content">¥{{ number_format($item['price']) }}</td>
                </tr>
                <tr class="purchase-result__row">
                    <td class="purchase-result__title method">支払い方法</td>
                    <td class="purchase-result__content">
                    @if (empty($item['method']))
                        支払い方法を選択してください
                    @else
                        {{ $item['method'] }}
                    @endif
                    </td>
                </tr>
            </table>

            <button class="purchase-result__button">
                購入する
            </button>
        </form>
    </div>
</div>
@endsection