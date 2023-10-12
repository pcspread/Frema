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
    <link rel="stylesheet" href="{{ asset('css/send_purchase.css') }}">
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
                こちらは、{{ $name }}様専用の購入詳細メールです。
                下記内容を確認の上、支払いをお願いします。
            </p>

            <div class="email__purchase-content">
                <div class="email__purchase-content__text-group">
                    [配送先住所]<br />
                    〒 {{ $postcode }}<br />
                    {{ $address }} {{ $building }}<br />
                </div>
                <div class="email__purchase-content__text-group">
                    [支払い方法]<br />
                    {{ $method }}
                </div>
                <div class="email__purchase-content__text-group">
                    [請求金額]<br />
                    ¥ {{ number_format($total) }}
                </div>
                <div class="email__purchase-content__text-group">
                    [支払い先]<br />
                    銀行名:三井住友銀行<br />
                    支店名:東京中央支店<br />
                    口座種別:普通<br />
                    口座番号:1112222<br />
                    口座名義:ｶ) ｶﾌﾞｼｷｶﾞｲｼｬ ﾌﾘﾏ
                </div>
            </div>
        </div>
    </main>
</body>
</html>