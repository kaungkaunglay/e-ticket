<!DOCTYPE html>
<html>
<head>
<title>Password Reset Request</title>
</head>
<body>
<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">
<h2 style="color: #333;">Password Reset Request</h2>

<p>Dear {{ $user->first_name }} {{ $user->last_name}},</p>

<p>You have requested to reset your password. Please click the button below to reset your password:</p>

<div style="text-align: center; margin: 30px 0;">
<a href="{{ $url }}" style="background-color: #007bff; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; display: inline-block;">Reset Password</a>
</div>
<p>If you did not request a password reset, please ignore this email.</p>

<p>This password reset link will expire in 60 minutes.</p>

<p>Thank you,</p>
<p>The {{ config('app.name') }} Team</p>
</div>
</body>
</html>
