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
    <link rel="stylesheet" href="{{ asset('css/layouts/default.css') }}" />
    @yield('css')
    <script src="{{ asset('js/default.js') }}" defer></script>
    @yield('js')
</head>
<body>
    <header class="header" id="top">
        <div class="header-title">
            <span class="header-title__icon">D</span>
            <a class="header-title__text" href="/">COACHTECH</a>
        </div>

        <div class="header-search">
            <input class="header-search__input" type="text" placeholder="なにをお探しですか？">
            <a class="header-search__fresh" href="/">✖</a>
        </div>
        
        <div class="header-nav">
            <ul class="nav-list">
                @if (!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/login">ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">会員登録</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/logout">ログアウト</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mypage">マイページ</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link sell" href="/sell">出品</a>
                </li>
            </ul>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <aside class="aside">
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
        
        <div class="upper">
            <a class="upper-click" href="#top">></a>
        </div>
    </aside>
</body>
</html>