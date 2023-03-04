<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Traveler</title>
            <!-- Fonts -->
            <link href="{{ secure_asset('/css/show.css') }}" rel="stylesheet">
        </head>
        <body>
            <div class="country_image">
                <image class="country_img" src={{ $country->image }} width="50%" alt="国の画像"/>
                <h1 class=country_name >{{ $country->country_name }}</h1>
            </div>
            <a href='/countries/{{ $country->id}}/posts/create'>あなたのお気に入りをシェアしよう！</a>
            @foreach ($posts as $post)
            <div class="post">
                <a href="/posts/{{ $post->id}}" class='title'>{{ $post->title }}</a>
                <p>{{ $post->body }}</p>
                @if ($post->image)
                    <div class="image">
                        <image src={{ $post->image }} width="50%" alt="画像が読み取れません"/>
                    </div>
                @endif
                <p>カテゴリ名: {{ $post->category->category_name}}</p>
                </p>
            </div>
            @endforeach
            <div>{{ $posts->links() }}</div>
            <div class='footer'>
                <a href="/countries/{{ $country->code }}">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>