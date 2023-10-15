@php
use App\Models\Top;
use App\Models\Owner;
@endphp
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="coachtechフリマサービス" />
    <title>coachtechフリマサービス</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/layouts/default.css') }}" />
    @yield('css')
    <script src="{{ asset('js/admin/default.js') }}" defer></script>
    @yield('js')
</head>
<body>
    <header class="header">
        <div class="header-title">
            <span class="header-title__icon">D</span>
            @if (Auth::user()['email'] === Top::first()['email'])
            <a class="header-title__text" href="/admin/top">COACHTECH</a>
            @elseif (Auth::user()['email'] === Owner::first()['email'])
            <a class="header-title__text" href="/admin/owner">COACHTECH</a>
            @endif
        </div>
    </header>

    <aside class="section">
        @if (Auth::user()['email'] === Top::first()['email'])
        <a class="top-header__click top-user" href="/admin/top">ユーザーリスト</a>
        <a class="top-header__click top-invite" href="/admin/top/invite">招待中リスト</a>
        @elseif (Auth::user()['email'] === Owner::first()['email'])
        <a class="top-header__click owner-user" href="/admin/owner">ユーザーリスト</a>
        <a class="top-header__click owner-invite" href="/admin/owner/invite">招待履歴</a>
        @endif
        <a class="top-header__click mail" href="/admin/mail">メール送信</a>
        <a class="top-header__click mail" href="/logout">ログアウト</a>
    </aside>

    @if (session('success'))
    <div class="message-box success">
        <p class="message-box__text success">{{ session('success') }}</p>
    </div>
    @endif

    @if (session('danger'))
    <div class="message-box danger">
        <p class="message-box__text danger">{{ session('danger') }}</p>
    </div>
    @endif

    <main class="main">
        @yield('content')
    </main>
</body>
</html>