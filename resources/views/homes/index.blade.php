<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Traveler</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div class="user_name">{{ Auth::user()->name }}</div>
            @foreach ($posts as $post)
            <div class="post">
                <a href="/homes/{{ $post->id}}" class='title'>{{ $post->title }}</a>
                <p>{{ $post->body }}</p>
                @if ($post->image)
                    <div class="image">
                        <image src={{ $post->image }} width="50%" alt="画像が読み取れません"/>
                    </div>
                @endif
                <p>カテゴリ名:
                <a href="/countries/{{ $post->country_id}}/categories/{{ $post->category_id }}">{{ $post->category->category_name}}</a>
                </p>
            </div>
            @endforeach
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
            <div>
                {{ $posts->links() }}
            </div>
        </body>
    </html>
</x-app-layout>