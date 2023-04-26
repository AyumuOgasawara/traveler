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
            <div class="header">
                <div class="header_left"></div>
                <div class="header_middle">
                    <div class="auth_user_name">{{ Auth::user()->name }}さんの投稿一覧</div>
                </div>    
            @if(!is_null($posts[0]))
            <div class="header_right">
                <select onChange="location.href=value;" class="category_option">
                    <option value="">カテゴリー</option>
                    <option value="/home/categories/1">食べ物</option>
                    <option value="/home/categories/2">観光地</option>
                    <option value="/home/categories/3">アクティビティ</option>
                </select>
            </div>
            </div>
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
                <div>{{ $posts->links() }}</div>
                <a href="/countries" class="back_btn">戻る</a>
            </div>
            @else
            <div class="header_right"></div>
            </div>
            <div class='no_posts'>
                <div>{{ Auth::user()->name }}さんの投稿はまだありません。</div>
                <div>topページから国を選択しお気に入りをシェアしましょう。</div>
            </div>
            <div class='footer'>
                <a href="/countries" class="no_posts_back_btn">戻る</a>
            </div>
            @endif
        </body>
    </html>
</x-app-layout>