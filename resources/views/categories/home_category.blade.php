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
            <div class="header">
                <div class="header_left"></div>
                <div class="header_middle">
                    <div class="auth_user_name">
                    {{ Auth::user()->name }}さんの投稿一覧
                    </div>
                </div>
                <div class="header_right">
                    <select onChange="location.href=value;" class="category_option">
                        <option value="">{{ $posts[0]->category->category_name }}</option>
                        @if($posts[0]->category->id != 1){<option value="/home/categories/1">食べ物</option>}@endif
                        @if($posts[0]->category->id != 2){<option value="/home/categories/2">観光地</option>}@endif
                        @if($posts[0]->category->id != 3){<option value="/home/categories/3">アクティビティ</option>}@endif
                    </select>    
                </div>
            </div>
            <div class="post_container">
                @foreach ($posts as $post)
                <div class="post">
                    <div class="title_name">
                        <a class="title" href="/home/{{ $post->id}}">{{ $post->title }}</a>
                    </div>
                    
                    @if ($post->image)
                    <div class="image">
                        <image class="post_image" src={{ $post->image }} alt="画像が読み取れません"/>
                    </div>
                    @endif
                    
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
                <div>{{ $posts->links() }}</div>
                <a href="/home" class="back_btn">戻る</a>
            </div>
                
            @else
            <div class='no_posts'>
                <div>このカテゴリーの投稿はありません</div>
            </div>
            <div class='footer'>
                <a href="/home" class="no_posts_back_btn">戻る</a>
            </div>
            @endif
        </body>
    </html>
</x-app-layout>