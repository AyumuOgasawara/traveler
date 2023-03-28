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
            <div class="user_name">{{ $posts[0]->user->name }}さんの投稿一覧</div>
            <select onChange="location.href=value;">
                <option value="">---------</option>
                <option value="/{{ $country->code }}/contributer/{{ $posts[0]->user_id }}/categories/1">食べ物</option>
                <option value="/{{ $country->code }}/contributer/{{ $posts[0]->user_id }}/categories/2">観光地</option>
                <option value="/{{ $country->code }}/contributer/{{ $posts[0]->user_id }}/categories/3">アクティビティ</option>
            </select>
            <div class="post_container">
                @foreach ($posts as $post)
                <div class="post">
                    <div class="title_name">
                        <a class='title' href="/home/{{ $post->id}}">{{ $post->title }}</a>
                    </div>
                        @if ($post->image)
                        <div class="image">
                            <image class="post_image" src={{ $post->image }} alt="画像が読み取れません"/>
                        </div>
                        @endif
                    <div class="category">
                        <p>カテゴリ名:
                        <a href="/home/categories/{{ $post->category_id }}">{{ $post->category->category_name}}</a>
                        </p>
                    </div>
                    <div class="body">
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class='footer'>
                <a href="/countries/{{ $country->code }}">戻る</a>
            </div>
            <div>
                {{ $posts->links() }}
            </div>
        </body>
    </html>
</x-app-layout>