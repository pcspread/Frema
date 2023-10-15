@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/owner_invite.css') }}">
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
                <th class="invite-title">
                    <p class="invite-title__text">招待時間</p>
                </th>
            </tr>
            @foreach ($invites as $invite)
            <tr class="invite-record">
                <td class="invite-content">
                    <p class="invite-content__text">{{ $invite->user['id'] }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">{{ $invite->user['name'] }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">{{ $invite->user['email'] }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">{{ $invite['created_at'] }}</p>
                </td>
            </tr>
            @endforeach

            @if (count($invites) === 0)
            <tr class="invite-record">
                <td class="invite-content" colspan="4">
                    招待履歴がありません
                </td>
            </tr>
            @endif
        </table>
    </div>
@endsection