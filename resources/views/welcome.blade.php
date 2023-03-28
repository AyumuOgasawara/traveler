<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Traveler</title>

        <!-- CSS-->
        <link href="{{ secure_asset('/css/welcome.css') }}" rel="stylesheet">

        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class=logo_btn>
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="ロゴ" />
            <h1>Welcome to Traveler</h1>
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="welcome_btn">メインページに戻る</a>
                        @else
                            <a href="{{ route('login') }}" class="welcome_btn">ログイン</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="welcome_btn">新規登録</a>
                            @endif
                        @endauth
                    </div>
                @endif    
        </div>
    </body>
</html>
