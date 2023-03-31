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
                    <div class="country_image">
                        <image class="country_img" src={{ $country->image }} width="60%" alt="国の画像"/>
                        <h1 class=country_name >{{ $country->country_name }}</h1>
                    </div>
                    @if(!is_null($posts[0]))
                    <div class="category_create">
                        <button class="create_btn" onclick="location.href='/countries/{{ $country->id}}/posts/create'">お気に入りをシェア！</button>
                        <select class="category_option" onChange="location.href=value;">
                            <option value="">{{ $posts[0]->category->category_name }}</option>
                            @if($posts[0]->category->id != 1){<option value="/countries/{{ $country->id}}/categories/1">食べ物</option>}@endif
                            @if($posts[0]->category->id != 2){<option value="/countries/{{ $country->id}}/categories/2">観光地</option>}@endif
                            @if($posts[0]->category->id != 3){<option value="/countries/{{ $country->id}}/categories/3">アクティビティ</option>}@endif
                        </select>
                    </div>
                </div>    
                <div class="post_container">
                    @foreach ($posts as $post)
                    <div class="post">
                        <div class="title_name">
                                <a class="title" href="/posts/{{ $post->id}}">{{ $post->title }}</a>
                                <p class="name">投稿者：{{ $post->user->name }}</p>
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
                    <a href="/countries/{{ $country->code }}">戻る</a>
                </div>
                <div>{{ $posts->links() }}</div>
            @else
            <div class='no_posts'>
                <div>このカテゴリーの投稿はありません</div>
                <a href="/countries/{{ $country->code }}">戻る</a>
            </div>
            @endif
        </body>
    </html>
</x-app-layout>