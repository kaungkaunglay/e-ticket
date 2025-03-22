<!DOCTYPE html>
<html>
<head>
    <title>「ユーザーメール」</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>ご予約ありがとうございます！</h1>
    <!-- <p>{{ $booking->first_name }} 様</p> -->

    <p><strong>{{ $restaurant->name }}</strong> へのご予約が確定いたしました。</p>
    

    <p><strong>ご予約内容：</strong></p>
    <ul>
        <li><strong>店舗名：</strong> {{ $restaurant->name }}</li>
        <li><strong>予約日時：</strong> {{ $booking->select_date }}</li>
        <li><strong>備考：</strong> {{ $booking->note ?? '特別なリクエストなし' }}</li>
    </ul>

    <p>後ほど予約確認の連絡をさせて頂きますので、宜しくお願い致します。</p>

    <p>ご来店を心よりお待ちしております。</p>
    <p>{{ $restaurant->name }} スタッフ一同</p>
</body>
</html>