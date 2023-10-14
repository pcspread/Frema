@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/owner_user.css') }}">
@endsection

@section('content')
<div class="user-section">
    <div class="user-list">
        <table class="user-table">
            <tr class="user-record">
                <th class="user-title">
                    <p class="user-title__text">ID</p>
                </th>
                <th class="user-title">
                    <p class="user-title__text">ユーザー名</p>
                </th>
                <th class="user-title">
                    <p class="user-title__text">メールアドレス</p>
                </th>
                <th class="user-title"></th>
                <th class="user-title"></th>
            </tr>
            @for ($i = 1; $i <= 8; $i++)
            <tr class="user-record">
                <td class="user-content">
                    <p class="user-content__text">{{ $i }}</p>
                </td>
                <td class="user-content">
                    <p class="user-content__text">ユーザー{{ $i }}</p>
                </td>
                <td class="user-content">
                    <p class="user-content__text">test{{ $i }}@test.com</p>
                </td>
                <td class="user-content">
                    <form class="user-comtent__form" action="">
                        <button class="user-content__button cancel" type="button" readonly>招待中</button>
                    </form>
                </td>
            </tr>
            @endfor
        </table>
    </div>
@endsection