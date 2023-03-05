<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Traveler</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>編集画面</h1>
            <form action="/home/{{$post->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="content_title">
                    <h2>Title</h2>
                    <input type="text" id="title" name="title" value="{{ $post->title }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                </div>
                <div class='content_body'>
                    <h2>Body</h2>
                    <textarea id="body" name="body" >{{ $post->body }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                </div>
                <div class='image'>
                    <h2>画像をアップロード</h2>
                    
                    <div class="image">
                        @if ($post->image)
                            <image id='old_img' src={{ $post->image }} width="50%" alt="画像が読み取れません"/>
                        @endif    
                    </div>
                    <input type="file" id= "image" name="image" onchange="ChangeHidden()" value="{{ old('image') }}"/>
                    <p class="image__error" style="color:red">{{ $errors->first('image') }}</p>
                </div>
                <div>
                    <h2>Category</h2>
                    <select name="category_id">
                          @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                          @endforeach
                    </select>
                </div>
                <button type="submit">更新</button>
                <div class='footer'>
                    <a href="/home/{{$post->id}}">戻る</a>
                </div>
            </form>
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