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
    <link rel="stylesheet" href="{{ asset('css/auth/send_purchase.css') }}">
</head>

<body>
    <header class="header">
        <h1 class="email-title">購入詳細メール</h1>
    </header>

    <main class="main">
        <div class="email-content">
            <p class="email-content__text">
                この度は、COACHTECHフリマサービスをご利用いただき、誠にありがとうございます。
            </p>
            <p class="email-content__text">
                こちらは、{{}}様専用の購入詳細メールです。<br />
                内容を確認の上、お支払いをお願いします。
            </p>
        </div>
    </main>
</body>
</html>