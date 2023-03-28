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
            <div class="post_container">
                <div class="post">
                    <div class="title_name">
                        <h1 class='title'>{{ $post->title }}</h1>
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
            </div>
                @if ($post->user_id == Auth::id())
                <div class='footer'>
                    <a href="/home/{{$post->id}}/edit">編集</a>
                </div>
                <form action="/home/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
                </form>
                @endif
                <div class='footer'>
                    <a href="/home">戻る</a>
                </div>
                <script>
                    function deletePost(id) {
                        'use strict'
                        
                        if (confirm('削除すると復元できません。\n本当にしますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
            
        </body>
    </html>
</x-app-layout>