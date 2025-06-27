<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>予約キャンセル通知</title>
    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #B22222;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .booking-details {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>予約がキャンセルされました</h2>
    </div>
    
    <div class="content">
        <p>以下の予約がキャンセルされました：</p>
        
        <div class="booking-details">
            <p><strong>お客様名：</strong> {{ $user->name }} 様</p>
            <p><strong>メールアドレス：</strong> {{ $user->email }}</p>
            <p><strong>レストラン名：</strong> {{ $restaurant->name ?? 'N/A' }}</p>
            <p><strong>住所：</strong> {{ $restaurant->address ?? 'N/A' }}</p>
            <p><strong>電話番号：</strong> {{ $restaurant->phone_number ?? 'N/A' }}</p>
            <p><strong>予約日時：</strong> {{ $booking->select_date ? \Carbon\Carbon::parse($booking->select_date)->format('Y年m月d日 H:i') : 'N/A' }}</p>
            <p><strong>キャンセル日時：</strong> {{ now()->format('Y年m月d日 H:i') }}</p>
            @if($booking->note)
            <p><strong>備考：</strong> {{ $booking->note }}</p>
            @endif
        </div>
        
        <p>この予約は正常にキャンセルされました。</p>
        
        <div class="footer">
            <p>このメールは自動送信されています。返信しないでください。</p>
            <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
