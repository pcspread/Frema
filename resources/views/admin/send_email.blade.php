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
    <link rel="stylesheet" href="{{ asset('css/admin/send_email.css') }}">
</head>

<body>
    <header class="header">
        <h1 class="email-title">お知らせメール</h1>
    </header>

    <main class="main">
        <div class="email-content">
            <p class="email-content__text">
                日頃より、COACHTECHフリマサービスをご利用いただき、誠にありがとうございます。
            </p>
            <h2 class="email-content__title">{{ $title }}</h2>
            <p class="email-content__text">
                {{ $content }}
            </p>
        </div>
    </main>
</body>
</html>