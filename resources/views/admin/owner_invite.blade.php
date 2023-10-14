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
                    <p class="invite-title__text">履歴時間</p>
                </th>
                <th class="invite-title"></th>
            </tr>
            @for ($i = 1; $i <= 8; $i++)
            <tr class="invite-record">
                <td class="invite-content">
                    <p class="invite-content__text">{{ $i }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">ユーザー{{ $i }}</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">test{{ $i }}@test.com</p>
                </td>
                <td class="invite-content">
                    <p class="invite-content__text">2023/11/01 11:11:11 </p>
                </td>
                <td class="invite-content"></td>
            </tr>
            @endfor
        </table>
    </div>
@endsection