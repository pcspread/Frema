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
    <link rel="stylesheet" href="{{ asset('css/auth/send_email.css') }}">
</head>

<body>
    <header class="header">
        <h1 class="email-title">認証メール</h1>
    </header>

    <main class="main">
        <p class="email-content">
            この度は、COACHTECHフリマサービスをご利用いただき、誠にありがとうございます。
        </p>
        <p class="email-content">
            こちらは、{{}}様専用のメール認証用の確認メールです。
            下記ボタンをクリックいただくと、本登録が完了します。
        </p>
        <a class="email-click" href="/">認証を完了する</a>
    </main>
</body>
</html>