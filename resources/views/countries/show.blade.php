<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Traveler</title>
            <!-- Fonts -->
            <link href="{{ secure_asset('/css/show.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
        </head>
        <body>
            <div class="header">
                <div class="top_button">
                    <button class="top_btn" onclick="location.href='/countries'"><img src="{{ asset('images/traveler1.png') }}" alt="トップページ" /></button>
                </div>
                <div class="country_image">
                    <image class="country_img" src={{ $country->image }} width="60%" alt="国の画像"/>
                    <h1 class=country_name >{{ $country->country_name }}</h1>
                </div>
                <div class="category_create">
                    <button class="create_btn" onclick="location.href='/countries/{{ $country->id}}/posts/create'">お気に入りをシェアしよう！</button>
                    <select class="category_option" onChange="location.href=value;">
                        <option value="">カテゴリー</option>
                        <option value="/countries/{{ $country->id}}/categories/1">食べ物</option>
                        <option value="/countries/{{ $country->id}}/categories/2">観光地</option>
                        <option value="/countries/{{ $country->id}}/categories/3">アクティビティ</option>
                    </select>
                </div>
            </div>
            
            <div class="post_container">
                @foreach ($posts as $post)
                <div class="post">
                    <div class="title_name">
                        <a class="title" href="/posts/{{ $post->id}}" class='title'>{{ $post->title }}</a>
                        <a class="name" href="/posts/{{ $country->code }}/contributer/{{ $post->user_id }}">投稿者：{{ $post->user->name }}</a>    
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
        </body>
    </html>
</x-app-layout>