@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/mail.css') }}">
@endsection

@section('content')
<div class="mail-section">
    <div class="mail-wrapper">
        <form class="mail-form" action="/admin/mail" method="POST">
        @csrf
            <div class="mail-item">
                <label class="mail-title" for="title">件名</label>
                <input class="mail-input" type="text" id="title" name="title" value="{{ old('title') }}" placeholder="入力欄" autofocus>
                <p class="mail-error">
                    @error('title')
                        {{ $errors->first('title') }}
                    @enderror
                </p>
            </div>
            <div class="mail-item">
                <label class="mail-title" for="content">内容</label>
                <textarea class="mail-input area" id="content" name="content" cols="30" rows="5" placeholder="入力欄">{{ old('content') }}</textarea>
                <p class="mail-error">
                    @error('content')
                        {{ $errors->first('content') }}
                    @enderror
                </p>
            </div>
            <button class="mail-button">送信</button>
        </form>
    </div>
</div>
@endsection