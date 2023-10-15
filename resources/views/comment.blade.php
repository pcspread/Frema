@php
use App\Models\Favorite;
@endphp
@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/comment.js') }}" defer></script>
@endsection

@section('content')
<div class="item-section">
    <div class="item-section__input">
        <div class="item-image">
            <img class="item-image__instance" src="https://dummyimage.com/150x200/000/0011ff" alt="商品画像">
        </div>
    
        <div class="item-content">
            <div class="item-name">
                <h1 class="item-name__label">
                    {{ $item['name'] }}
                </h1>
            </div>
    
            <div class="item-brand">
                <h3 class="item-brand__label">{{ $brand }}</h3>
            </div>
    
            <div class="item-price">
                <p class="item-price__instance">¥{{ number_format($item['price']) }}(値段)</p>
            </div>
    
            <div class="item-impression">
                <div class="item-favorite">
                    <form class="item-favorite__form" action="/item/{{ $item['id'] }}/comment" method="POST">
                    @method('PATCH')
                    @csrf
                        @if (empty(Favorite::where('user_id', Auth::id())->where('item_id', $item['id'])->first()))
                        <button class="item-favorite__click">☆</button>
                        @else
                        <button class="item-favorite__click favorite" >★</button>
                        @endif
                    </form>
                    <p class="item-favotite__number">{{ $favorite }}</p>
                </div>
        
                <div class="item-comment">
                    <a class="item-comment__click" href="">💭</a>
                    <p class="item-comment__number">{{ count($comments) }}</p>
                </div>
            </div>
    
            @if (Auth::user()->invite)
            <div class="purchase-content">
                <form class="purchase-content__form" action="/item/{{ $item['id'] }}/comment" method="POST">
                @csrf
                    <div class="purchase-record">
                        <input class="purchase-record__checkbox user" type="radio" name="checkbox" value="user" checked>
                        <label class="purchase-record__label">ユーザー名</label>
                        <input class="purchase-record__input" type="text" name="user_name" value="{{ (empty(Auth::user()['name'])) ? '設定されていません' : Auth::user()['name'] }}" readonly>
                        <p class="purchase-record__error"></p>
                    </div>
    
                    <div class="purchase-record">
                        <input class="purchase-record__checkbox new" type="radio" name="checkbox" value="new">
                        <label class="purchase-record__label" for="name">名前(ユーザー名以外で投稿される場合)</label>
                        <input class="purchase-record__input" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="入力欄">
                        <p class="purchase-record__error">
                            @error('name')
                                {{ $errors->first('name') }}
                            @enderror
                        </p>
                    </div>
                    
                    <div class="purchase-record">
                        <label class="purchase-record__label" for="content">商品へのコメント</label>
                        <textarea class="purchase-record__comment" id="" name="content" cols="30" rows="3" placeholder="入力欄">{{ old('content') }}</textarea>
                        <p class="purchase-record__error">
                            @error('content')
                                {{ $errors->first('content') }}
                            @enderror
                        </p>
                    </div>
                    
                    <button class="purchase-button__instance">コメントを送信する</button>
                </form>
            </div>
            @endif
        </div>
    </div>

    <div class="item-section__comment">
        <h2 class="comment-title">
            コメント
        </h2>

        <div class="comment-content">
            @if (count($comments) > 0)
            @foreach ($comments as $comment)
            <div class="comment-item">
                <h3 class="comment-name">{{ $comment['name'] }}</h3>
                <p class="comment-time">{{ $comment['created_at'] }}</p>
                <p class="comment-description">
                    {{ $comment['content'] }}
                </p>
            </div>
            @endforeach
            @else
            <p class="comment-none">
                コメントがありません
            </p>
            @endif
        </div>
    </div>
</div>
@endsection