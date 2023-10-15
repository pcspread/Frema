@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/top_invite.css') }}">
@endsection

@section('content')
<div class="invite-section">
    <div class="invite-list">
        <table class="invite-table">
            <tr class="invite-record">
                <th class="invite-title">
                    <p class="invite-title__text">ID</p>
                </th>
                <th class="invite-title">
                    <p class="invite-title__text">ユーザー名</p>
                </th>
                <th class="invite-title">
                    <p class="invite-title__text">メールアドレス</p>
                </th>
                <th class="invite-title"></th>
                <th class="invite-title"></th>
            </tr>
            @foreach ($users as $user)
            <tr class="invite-record">
                <td class="invite-content">
                    <p class="invite-content__text">{{ $user['id'] }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">{{ $user['name'] }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">{{ $user['email'] }}</p>
                </td>
                <td class="invite-content">
                    <form class="invite-comtent__form" action="/admin/top/invite" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{ $user['id'] }}">
                        <button class="invite-content__button cancel">キャンセルする</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if (count($users) === 0)
            <tr class="invite-record">
                <td class="invite-content" colspan="4">
                    招待中のユーザーデータがありません
                </td>
            </tr>
            @endif
        </table>
    </div>
@endsection