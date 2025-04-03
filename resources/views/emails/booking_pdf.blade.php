<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>予約確認 </title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
    <style type="text/css">
    
        body {
            font-family: 'Noto Sans JP', sans-serif;
            line-height: 1.6;
            color: #333;
        }
        

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
            color: #d70035; 
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
            <img src="{{ asset('assets/img/general/home.png') }}" class="header-image" alt="Header Image">
            <h1>ご予約ありがとうございます！</h1>
        </div>
        
        <p><strong></strong> へのご予約が確定いたしました。</p>
        
        <div class="details">
            <div class="detail-item">
                <span class="detail-label">店舗名：</span>
              
            </div>
            <div class="detail-item">
                <span class="detail-label">予約日時：</span>
              
            </div>
            <div class="detail-item">
                <span class="detail-label">お名前：</span>
              
            </div>
        
            <div class="detail-item">
                <span class="detail-label">備考：</span>
               
            </div>
          
        </div>
        
        <p>後ほど予約確認の連絡をさせて頂きますので、宜しくお願い致します。</p>
        <p>ご来店を心よりお待ちしております。</p>
        
        <div class="footer">
            <p>スタッフ一同</p>
            <p>電話: </p>
            <p>住所:    </p>
        </div>
    </div>
</body>
</html>