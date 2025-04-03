<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>予約確認 #{{ $booking->id }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
    <style type="text/css">
        /* Fallback font stack */
        body {
            font-family: 'Noto Sans JP', sans-serif, "Hiragino Kaku Gothic Pro", Meiryo, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* PDF-specific font face declaration */
        @font-face {
            font-family: 'Noto Sans JP';
            font-style: normal;
            font-weight: 400;
            src: url('https://fonts.gstatic.com/ea/notosansjp/v5/NotoSansJP-Regular.woff2') format('woff2'),
                 url('https://fonts.gstatic.com/ea/notosansjp/v5/NotoSansJP-Regular.woff') format('woff');
        }
        
        @font-face {
            font-family: 'Noto Sans JP';
            font-style: normal;
            font-weight: 700;
            src: url('https://fonts.gstatic.com/ea/notosansjp/v5/NotoSansJP-Bold.woff2') format('woff2'),
                 url('https://fonts.gstatic.com/ea/notosansjp/v5/NotoSansJP-Bold.woff') format('woff');
        }
        
        /* Main styling */
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
            font-weight: 700;
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
            font-weight: 700;
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