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
            @foreach ($users as $user)
            <tr class="user-record">
                <td class="user-content">
                    <p class="user-content__text">{{ $user['id'] }}</p>
                </td>
                <td class="user-content">
                    <p class="user-content__text">{{ $user['name'] }}</p>
                </td>
                <td class="user-content">
                    <p class="user-content__text">{{ $user['email'] }}</p>
                </td>
                <td class="user-content">
                    <div class="user-content__buttons">
                        <form class="user-comtent__form" action="/admin/top" method="POST">
                        @csrf
                            <input type="hidden" name="id" value="{{ $user['id'] }}">
                            @if (empty($user->invite))
                            <button class="user-content__button invite">招待</button>
                            @else
                            <span class="user-content__button invite true">招待中</span>
                            @endif
                        </form>
                        <form class="user-content__form" action="/admin/top/" method="POST">
                        @method('DELETE')
                        @csrf
                            <input type="hidden" name="id" value="{{ $user['id'] }}">
                            <button class="user-content__button delete">削除</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection