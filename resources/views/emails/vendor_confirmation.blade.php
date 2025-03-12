<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ベンダー登録確認</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #007BFF;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 150px;
            height: auto;
        }

        .content {
            padding: 20px;
            color: #333333;
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #007BFF;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .promo-code {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #007BFF;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007BFF;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            text-align: center;
        }

        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #666666;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="logo.png" alt="会社ロゴ">
        </div>
        <div class="content">
            <h1>こんにちは、{{ $name }}さん!</h1>
            <p>ベンダーとして登録いただきありがとうございます。あなたを迎えられることを楽しみにしています！</p>
            <p>あなたの独占プロモーションコードは：</p>
            <div class="promo-code">
                {{ $promoCode }}
            </div>
            <p>このプロモーションコードは2ヶ月後に期限切れになりますので、お早めにご利用ください。</p>
            <p>アカウントを有効化し、プロモーションコードを使用するには、メールアドレスを確認してください。</p>
            <a href="{{ $confirmationLink }}" class="button" style="color: white;">メールを確認する</a>
            <p>上のボタンが機能しない場合は、以下のリンクをコピーしてブラウザに貼り付けてください：</p>
            <p style="color: white;"><a href="{{ $confirmationLink }}" style="color: white; background-color: #007BFF; padding: 5px; border-radius: 4px;">{{ $confirmationLink }}</a></p>
        </div>
        <div class="footer">
            <p>もしこのメールに心当たりがない場合は、そのまま無視してください。</p>
            <p>&copy; {{ date('Y') }} あなたの会社. 全著作権所有.</p>
        </div>
    </div>
</body>

</html>