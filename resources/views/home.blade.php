<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('lang', 'ru') }}">Русский</a> <br>
    <a href="{{ route('lang', 'en') }}">English</a> <br>
    <h1>{{ __('messages.welcome') }}</h1>
    <h2>{{ __('messages.about') }}</h2>
</body>
</html>
