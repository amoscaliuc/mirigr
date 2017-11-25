<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
Сообщение с сайта mirigr.md:

<p>
    Name: {{ $name }}
</p>

<p>
    Email: {{ $email }}
</p>

<p>
    Message: {{ $user_message }}
</p>

<a href="{{ route("game.main") }}"> Мир Игр </a>
</body>
</html>