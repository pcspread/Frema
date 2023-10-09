@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('content')
<div class="item-section">
    <div class="item-image">
        <img class="item-image__instance" src="https://dummyimage.com/150x200/000/0011ff" alt="商品画像">
    </div>

    <div class="item-content">
        <div class="item-name">
            <h1 class="item-name__label">
                商品名
            </h1>
        </div>

        <div class="item-brand">
            <h3 class="item-brand__label">ブランド名</h3>
        </div>

        <div class="item-price">
            <p class="item-price__instance">¥47,000(値段)</p>
        </div>

        <div class="item-impression">
            <div class="item-favorite">
                <form class="item-favorite__form" action="
                ">
                    <button class="item-favorite__click">☆</button>
                </form>
                <p class="item-favotite__number">3</p>
            </div>
    
            <div class="item-comment">
                <a class="item-comment__click" href="">💭</a>
                <p class="item-comment__number">3</p>
            </div>
        </div>

        <div class="purchase-content">
            <form class="purchase-content__form" action="" method="">
                <div class="purchase-record">
                    <label class="purchase-record__label" for="">名前</label>
                    <input class="purchase-record__input" type="text" id="name" name="name" value="" placeholder="入力欄">
                    <p class="purchase-record__error"></p>
                </div>
                
                <div class="purchase-record">
                    <label class="purchase-record__label" for="comment">商品へのコメント</label>
                    <textarea class="purchase-record__comment" id="" name="comment" cols="30" rows="3" placeholder="入力欄"></textarea>
                    <p class="purchase-record__error"></p>
                </div>
                
                <button class="purchase-button__instance">コメントを送信する</button>
            </form>
        </div>
    </div>
</div>
@endsection