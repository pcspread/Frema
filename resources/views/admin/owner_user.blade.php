@extends('admin.layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/owner_user.css') }}">
@endsection

@section('js')
<script src="{{ asset('js/admin/owner_user.js') }}" defer></script>
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
                    <div class="user-comtent__group">
                        @if (!empty($user->invite))
                        <span class="user-content__invite" type="button" readonly>招待中</span>
                        @else
                        <span class="user-content__invite false" type="button" readonly>未招待</span>
                        @endif
                        <form class="user-comtent__form" action="/admin/owner" method="POST">
                        @method('DELETE')
                        @csrf
                            <input type="hidden" name="id" value="{{ $user['id'] }}">
                            <button class="user-content__button delete" onClick="return confirmDel()">削除</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            
            @if (count($users) === 0)
            <tr class="invite-record">
                <td class="invite-content" colspan="4">
                    ユーザーデータがありません
                </td>
            </tr>
            @endif
        </table>
    </div>
@endsection