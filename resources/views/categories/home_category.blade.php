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
            @if(!is_null($posts[0]))
                <div>
                    {{ Auth::user()->name }}さんが投稿した投稿一覧{{ $posts[0]->category->category_name }}
                </div>
                <select onChange="location.href=value;">
                    <option value="">{{ $posts[0]->category->category_name }}</option>
                    @if($posts[0]->category->id != 1){<option value="/home/categories/1">食べ物</option>}@endif
                    @if($posts[0]->category->id != 2){<option value="/home/categories/2">観光地</option>}@endif
                    @if($posts[0]->category->id != 3){<option value="/home/categories/3">アクティビティ</option>}@endif
                </select>
                <div class="post_container">
                    @foreach ($posts as $post)
                    <div class="post">
                        <div class="home_title">
                            <a href="/home/{{ $post->id}}" class="home_title">{{ $post->title }}</a>
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
                <div class='footer'>
                    <a href="/home">戻る</a>
                </div>
                <div>
                    {{ $posts->links() }}
                </div>
            @else
            <div>このカテゴリーの投稿はありません</div>
            <a href="/home">戻る</a>
            @endif
        </body>
    </html>
</x-app-layout>