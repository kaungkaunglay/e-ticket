<!DOCTYPE html>
<html>
<head>
<title>パスワードリセットのリクエスト</title>
</head>
<body>
<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
<h2 style="color: #333;">パスワードリセットのリクエスト</h2>

<p>親愛なる {{ $user->first_name }} {{ $user->last_name }} 様,</p>

<p>パスワードのリセットをリクエストされました。以下のボタンをクリックして、パスワードをリセットしてください。</p>

<div style="text-align: center; margin: 30px 0;">
<a href="{{ $url }}" style="background-color: #007bff; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; display: inline-block;">パスワードをリセット</a>
</div>

<p>このリクエストに心当たりがない場合は、本メールを無視してください。</p>

<p>このパスワードリセットリンクは60分後に無効になります。</p>

<p>よろしくお願いいたします。</p>
<p>{{ config('app.name') }} チーム</p>
</div>
</body>
</html>

