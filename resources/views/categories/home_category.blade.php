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
            <div>
                {{ Auth::user()->name }}さんが投稿した投稿一覧{{ $posts[0]->category->category_name }}
            </div>
            <div class="post_container">
                @foreach ($posts as $post)
                <div class="post">
                    <dic class="title_name">
                        <a href="/home/{{ $post->id}}" class='title'>{{ $post->title }}</a>
                    </dic>
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
                <a href="/home">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>