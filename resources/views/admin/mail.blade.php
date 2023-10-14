@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/mail.css') }}">
@endsection

@section('content')
<div class="mail-section">
    <div class="mail-wrapper">
        <div class="mail-item">
            <label class="mail-title" for="">件名</label>
            <input class="mail-input" type="text" autofocus>
            <p class="mail-error"></p>
        </div>
        <div class="mail-item">
            <label class="mail-title" for="">内容</label>
            <input class="mail-input" type="text">
            <p class="mail-error"></p>
        </div>
        <button class="mail-button">送信</button>
    </div>
</div>
@endsection