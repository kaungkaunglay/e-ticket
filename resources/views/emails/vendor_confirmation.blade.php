<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Registration Confirmation</title>
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
            <img src="logo.png" alt="Company Logo">
        </div>
        <div class="content">
            <h1>Hello, {{ $name }}!</h1>
            <p>Thank you for registering as a vendor with us. We're excited to have you on board!</p>
            <p>Your exclusive promotion code is:</p>
            <div class="promo-code">
                {{ $promoCode }}
            </div>
            <p>Please confirm your email address to activate your account and start using your promotion code.</p>
            <a href="{{ $confirmationLink }}" class="button">Confirm Email</a>
            <p>If the button above doesn't work, copy and paste the following link into your browser:</p>
            <p><a href="{{ $confirmationLink }}">{{ $confirmationLink }}</a></p>
        </div>
        <div class="footer">
            <p>If you did not register with us, please ignore this email.</p>
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>