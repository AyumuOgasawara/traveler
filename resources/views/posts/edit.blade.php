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
                <h1 class="big_title">編集画面</h1>    
            </div>
            <div class="post_container">
                <form class="post" action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="title_container">
                        <h2 class="title left_container">タイトル</h2>
                        <div class="right_container">
                            <input class="input" type="text" id="title" name="title" value="{{ $post->title }}"/>
                            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                        </div>
                    </div>
                    <div class='body_container'>
                        <h2 class="body left_container">内容</h2>
                        <div class="right_container">
                            <textarea class="input" id="body" name="body" >{{ $post->body }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                        </div>
                    </div>
                        <div class="image_container">
                            <h2 class="image left_container">
                                画像を
                                <p>アップロード</p>
                            </h2>
                            <div class="right_container post_images">
                            @if ($post->image)
                                <image class="edit_old_img" id='old_img' src={{ $post->image }} alt="画像が読み取れません"/>
                            @endif
                            <input type="file" class="edit_image" id= "image" name="image" onchange="ChangeHidden()" value="{{ old('image') }}"/>
                            <p class="image__error error_img" style="color:red">{{ $errors->first('image') }}</p>
                            </div>
                        </div>
                    <div class="category_container">
                        <h2 class="category left_container">カテゴリー</h2>
                        <div class="right_container"> 
                            <select name="category_id">
                                  @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="update_share_btn">更新</button>
                    <div class='footer'>
                        <a href="/posts/{{$post->id}}" class="back_btn">戻る</a>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                function ChangeHidden() {
                  const elem = document.getElementById('old_img');
                  const input = document.getElementById('image');
                  if (input.value) {
                    elem.hidden = true;
                  } else {
                    elem.hidden = false;
                  }
                }
            </script>
        </body>
    </html>
</x-app-layout>