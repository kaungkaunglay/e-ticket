<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>予約確認 #{{ $booking->id }}</title>
    <style>
        body { 
            font-family: 'Helvetica', 'Arial', 'Hiragino Sans', 'Meiryo', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .header { 
            text-align: center; 
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .header-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        h1 {
            color: #d70035; /* Japanese red */
            font-size: 24px;
            margin-bottom: 10px;
        }
        .content {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .details {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .detail-label {
            font-weight: bold;
            display: inline-block;
            width: 100px;
            color: #555;
        }
        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #777;
            text-align: center;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="header">
           
            <h1>ご予約ありがとうございます！</h1>
        </div>
        
        <p><strong>{{ $restaurant->name }}</strong> へのご予約が確定いたしました。</p>
        
        <div class="details">
            <div class="detail-item">
                <span class="detail-label">店舗名：</span>
                <strong>{{ $restaurant->name }}</strong>
            </div>
            @if($restaurant->price_range)
            <div class="detail-item">
                <span class="detail-label">価格帯：</span>
                ¥{{ $restaurant->price_range }}
            </div>
            @endif
            <div class="detail-item">
                <span class="detail-label">予約日時：</span>
                {{ \Carbon\Carbon::parse($booking->select_date)->format('Y年m月d日 H:i') }}
            </div>
            <div class="detail-item">
                <span class="detail-label">お名前：</span>
                {{ $user->first_name }}
            </div>
            @if($booking->note)
            <div class="detail-item">
                <span class="detail-label">備考：</span>
                {{ $booking->note }}
            </div>
            @endif
        </div>
        
        <p>後ほど予約確認の連絡をさせて頂きますので、宜しくお願い致します。</p>
        <p>ご来店を心よりお待ちしております。</p>
        
        <div class="footer">
            <p>{{ $restaurant->name }} スタッフ一同</p>
            <p>電話: {{ $restaurant->phone }}</p>
            <p>住所: {{ $restaurant->address }}</p>
        </div>
    </div>
</body>
</html>