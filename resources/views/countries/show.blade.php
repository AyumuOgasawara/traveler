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
            
            <select onChange="location.href=value;">
                <option value="">カテゴリー</option>
                <option value="/countries/{{ $country->id}}/categories/1">食べ物</option>
                <option value="/countries/{{ $country->id}}/categories/2">観光地</option>
                <option value="/countries/{{ $country->id}}/categories/3">アクティビティ</option>
            </select>
            
            <button class="btn" onclick="location.href='/countries/{{ $country->id}}/posts/create'">お気に入りをシェアしよう！</button>
            <div class="post_container">
                @foreach ($posts as $post)
                <div class="post">
                    <div class="tile_name">
                        <a class="title" href="/posts/{{ $post->id}}" class='title'>{{ $post->title }}</a>
                        <p class="name">投稿者：{{ $post->user->name }}</p>    
                    </div>
                    <div class="image">
                        @if ($post->image)
                        <image src={{ $post->image }} alt="画像が読み取れません"/>
                        @endif
                    </div>
                    <div class="category">
                        <p>カテゴリ名:
                        <a href="/countries/{{ $post->country_id}}/categories/{{ $post->category_id }}">{{ $post->category->category_name}}</a>
                        </p>    
                    </div>
                    <div class="body">
                        <p>{{ $post->body }}</p>    
                    </div>
                </div>    
                @endforeach    
            </div>
            <div class='footer'>
                <a href="/countries">戻る</a>
            </div>
            <div>
                {{ $posts->links() }}
            </div>
            
            <div style="width: 100%; height: 500px; background-color: blue;">
                <div style="background-color: red; width:100%; height: 10%;">ヘッダー</div>
                <div style="background-color: pink; width:40%; height: 20%; margin-left: 30%; margin-right: 30%;">コンテンツ</div>
                <div style="background-color: yellow; width:100%; height: 30%;">タイトル</div>
                <div style="background-color: green; width:100%; height: 40%;">コンテンツ</div>
            </div>
            
        </body>
    </html>
</x-app-layout>