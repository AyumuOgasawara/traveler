<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Traveler</title>
            <!-- Fonts -->
            <link href="{{ secure_asset('/css/create_edit.css') }}" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            
            <div class="big_title_container">
                <h1 class="big_title">ブログ投稿</h1>
            </div>
            <div class="post_container">
                <form class="post" action="/countries/{{$country->id}}/posts" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="title_container">
                        <h2 class="title left_container">タイトル</h2>
                        <div class="right_container">
                            <input class="input" type="text" id="title" name="title" placeholder="タイトル" value="{{ old('title')}}"/>
                            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                        </div>
                    </div>
                    <div class='body_container'>
                        <h2 class="body left_container">内容</h2>
                        <div class="right_container">
                            <textarea class="input" id="body" name="body" placeholder="おすすめについて詳しく教えて">{{ old('body')}}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                        </div>
                    </div>
                    <div class='image_container'>
                        <h2 class="image left_container">
                            画像を
                            <p>アップロード</p>
                        </h2>
                        <div class="right_container">    
                            <input type="file" id= "image" name="image" value="{{ old('image') }}"/>
                            <p class="image__error" style="color:red">{{ $errors->first('image') }}</p>
                        </div>
                    </div>
                    <div class="category_container">
                        <h2 class="category left_container">カテゴリー</h2>
                        <div class="right_container">    
                            <select  name="category_id">
                                  @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="update_share_btn">シェアする</button>
                    <div class='footer'>
                        <a href="/countries/{{$country->code}}" class="back_btn">戻る</a>
                    </div>
                </form>
            </div>    
            
        </body>
    </html>
</x-app-layout>