<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Traveler</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <h1 class='title'>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        @if ($post->image)
            <div class="image">
                <image src={{ $post->image }} width="50%" alt="画像が読み取れません"/>
            </div>
        @endif
        <p>カテゴリ名: {{ $post->category->category_name}}</p>
        <div class='footer'>
            <a href="/posts/{{$post->id}}/edit">編集</a>
        </div>
        <div class='footer'>
            <a href="/countries/{{$post->country_id}}">戻る</a>
        </div>
    </body>
</html>