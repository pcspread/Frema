@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase-section">
    <div class="purchase-content">
        <div class="purchase-image">
            <img class="purchase-image__instance" src="https://dummyimage.com/150x200/000/0011ff" alt="商品画像">
    
            <div class="purchase-image__sub">
                <div class="purchase-name">
                    <h1 class="purchase-name__label">商品名</h1>
                    <p class="purchase-name__instance">ウォーターフォール</p>
                </div>
                <h3 class="purchase-price">¥47,000</h3>
            </div>
        </div>

        <div class="purchase-method">
            <form class="purchase-method__form" action="">
                <h2 class="purchase-method__title">支払い方法</h2>
                <select class="purchase-method__select" name="" id="">
                    <option class="purchase-method__select-record" value="case1">口座振替</option>
                    <option class="purchase-method__select-record" value="case2">コンビニ払い</option>
                    <option class="purchase-method__select-record" value="case3">現金払い</option>
                </select>
                <button class="purchase-method__button">変更する</button>
            </form>
        </div>

        <div class="purchase-carry">
            <h2 class="purchase-carry__title">配送先</h2>
            <a class="purchase-carry__click" href="">変更する</a>
        </div>
    </div>

    <div class="purchase-result">
        <form class="purchase-result__form" action="">
            <table class="purchase-result__table">
                <tr class="purchase-result__row">
                    <td class="purchase-result__title price">商品代金</td>
                    <td class="purchase-result__content">¥47,000</td>
                </tr>
                <tr class="purchase-result__row">
                    <td class="purchase-result__title pay">支払い金額</td>
                    <td class="purchase-result__content">¥47,000</td>
                </tr>
                <tr class="purchase-result__row">
                    <td class="purchase-result__title method">支払い方法</td>
                    <td class="purchase-result__content">コンビニ払い</td>
                </tr>
            </table>

            <button class="purchase-result__button">
                購入する
            </button>
        </form>
    </div>
</div>
@endsection