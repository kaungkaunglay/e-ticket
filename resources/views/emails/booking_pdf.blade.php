<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>予約確認 #{{ $booking->id }}</title>
    <style type="text/css">
        @font-face {
            font-family: 'NotoSansJP';
            font-style: normal;
            font-weight: normal;
            src: local('Noto Sans JP'), local('NotoSansJP-Regular'),
                 url('{{ public_path('assets/fonts/NotoSanJP/NotoSansJP-Regular.otf') }}') format('opentype');
        }
        
        @font-face {
            font-family: 'NotoSansJP';
            font-style: normal;
            font-weight: bold;
            src: local('Noto Sans JP Bold'), local('NotoSansJP-Bold'),
                 url('{{ public_path('assets/fonts/NotoSanJP/NotoSansJP-Bold.otf') }}') format('opentype');
        }
        
        body {
            font-family: 'NotoSansJP', 'Noto Sans JP', 'Hiragino Kaku Gothic Pro', Meiryo, sans-serif;
            line-height: 1.4;
            color: #000000 !important;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin: 10px;
            padding: 0;
            font-size: 11px;
        }
        
        /* Ensure all text is black */
        body, p, h1, h2, h3, h4, h5, h6, div, span, strong, em, a, td, th, li, dt, dd, label {
            color: #000000 !important;
            padding: 0;
            margin: 0;
        }
        
        /* Main styling */
        .header { 
            text-align: center; 
            margin-bottom: 8px;
            padding-bottom: 8px;
        }
        .logo {
            max-width: 120px;
            margin: 0 auto 5px;
            display: block;
        }
        h1 {
            color: #d70035;
            font-size: 16px;
            margin: 3px 0;
            font-weight: 700;
        }
        .content {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 5px;
        }
        .details {
            background: #f9f9f9;
            padding: 8px 10px;
            border-radius: 3px;
            margin: 8px 0;
        }
        .detail-item {
            margin-bottom: 5px;
            line-height: 1.3;
        }
        .detail-label {
            font-weight: 700;
            display: inline-block;
            width: 70px;
            color: #555;
            font-size: 10px;
            vertical-align: top;
        }
        .detail-value {
            display: inline-block;
            width: calc(100% - 75px);
            font-size: 10px;
            
        }
        .footer {
            margin-top: 10px;
            font-size: 9px;
            color: #777;
            text-align: center;
            padding-top: 8px;
            line-height: 1.3;
        }
        p {
            margin: 5px 0;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="header">
            <img src="{{ public_path('assets/img/general/216415.jpg') }}" alt="Logo" class="logo">
            <h1>予約確認 #{{ $booking->id }}</h1>
            <p>ご予約ありがとうございます</p>
        </div>
        
        <p><strong>{{ $restaurant->name }}</strong> へのご予約が確定いたしました。</p>
        
        <div class="details">
            <div class="detail-item">
                <span class="detail-label">店舗名：</span>
                <strong class="detail-value">{{ $restaurant->name }}</strong>
            </div>
            @if($restaurant->price_range)
            <div class="detail-item">
                <span class="detail-label">価格帯：</span>
                <strong class="detail-value">¥{{ $restaurant->price_range }}</strong>
            </div>
            @endif
            <div class="detail-item">
                <span class="detail-label">予約日時：</span>
                <strong class="detail-value">{{ \Carbon\Carbon::parse($booking->select_date)->format('Y年m月d日 H:i') }}</strong>
            </div>
            <div class="detail-item">
                <span class="detail-label">お名前：</span>
                <strong class="detail-value">{{ $user->first_name }}</strong>
            </div>
            @if($booking->note)
            <div class="detail-item">
                <span class="detail-label">備考：</span>
                <strong class="detail-value">{{ $booking->note }}</strong>
            </div>
            @endif
        </div>
        
        <strong>後ほど予約確認の連絡をさせて頂きますので、宜しくお願い致します。</strong>
        <strong>ご来店を心よりお待ちしております。</strong>
        
        <div class="footer">
            <div><strong>{{ $restaurant->name }} スタッフ一同</strong></div>
            <div><strong>電話: {{ $restaurant->phone }}</strong></div>
            <div><strong>住所: {{ $restaurant->address }}</strong></div>
        </div>
    </div>
</body>
</html>