@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/top_user.css') }}">
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
                    <div class="user-content__buttons">
                        <form class="user-comtent__form" action="">
                            <button class="user-content__button invite">招待</button>
                        </form>
                        <form class="user-content__form" action="">
                            <button class="user-content__button delete">削除</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endfor
        </table>
    </div>
@endsection