<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Traveler</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>お気に入りをシェアしよう</h1>
        <form action="/countries/{{$country->id}}/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" id="title" name="title" placeholder="タイトル">
            </div>
            <div class='body'>
                <h2>Body</h2>
                <textarea id="body" name="body" placeholder="おすすめについて詳しく教えて"></textarea>
            </div>
            <div>
                <h2>Category</h2>
                <select name="category_id">
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                      @endforeach
                </select>
            </div>
            <button type="submit">シェアする</button>
            <div class='footer'>
                <a href="/countries/{{$country->id}}">戻る</a>
            </div>
        </form>
    </body>
</html>