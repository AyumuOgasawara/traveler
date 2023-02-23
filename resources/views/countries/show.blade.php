<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Traveler</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $country->country_name }}</h1>
        <a href='/countries/{{ $country->id}}/posts/create'>あなたのお気に入りをシェアしよう！</a>
        @foreach ($country->posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            @if ($post->image)
                <div class="image">
                    <image src={{ $post->image }} width="50%" alt="画像が読み取れません"/>
                </div>
            @endif
            <p>カテゴリ名: {{ $post->category->category_name}}</p>
        </div>
        @endforeach
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>