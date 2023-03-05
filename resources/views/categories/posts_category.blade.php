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
                <image class="country_img" src={{ $country->image }} width="60%" alt="国の画像"/>
                <h1 class=country_name >{{ $country->country_name }}</h1>
            </div>
            <button class="btn" onclick="location.href='/countries/{{ $country->id}}/posts/create'">お気に入りをシェアしよう！</button>
            <div class="post_container">
                @foreach ($posts as $post)
                <div class="post">
                    <div class="tile_name">
                            <a href="/posts/{{ $post->id}}" class='title'>{{ $post->title }}</a>
                            <p class="name">投稿者：{{ $post->user->name }}</p>
                    </div>
                    <div class="image">
                        @if ($post->image)
                        <image src={{ $post->image }} alt="画像が読み取れません"/>
                        @endif
                    </div>
                    <div class="category">
                        <p>カテゴリ名: {{ $post->category->category_name}}</p>
                    </div>
                    <div class="body">
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div>{{ $posts->links() }}</div>
            <div class='footer'>
                <a href="/countries/{{ $country->code }}">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>