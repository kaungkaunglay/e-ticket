<!DOCTYPE html>
<html>
<head>
    <title>管理者メール</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>ユーザーからご予約連絡がありました。</h1>

    <!-- <p>{{ $booking->first_name }} 様</p> -->

    <h2>ご予約内容：</h2>

    <p><strong>ユーザー名：</strong> {{ $user->name }}</p>

    <p><strong>メールアドレス：</strong>{{ $user->email }}</p>
    <p><strong>電話番号 :</strong>{{ $user->phone }}</p>
    <ul>
        <li><strong>店舗名：</strong> {{ $restaurant->name }}</li>
        <li><strong>予約日時：</strong> {{ $booking->select_date }}</li>
        <li><strong>備考：</strong> {{ $booking->note ?? '特別なリクエストなし' }}</li>
    </ul>

    <p>予約のご確認の程宜しくお願い致します。</p>

</body>
</html>