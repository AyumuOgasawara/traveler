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
            <div>
                <a href='/homes'>{{ Auth::user()->name }}さんの投稿一覧</a>
            </div>
            @foreach ($countries as $country)
            <h2>
            <a href="/countries/{{ $country->id }}">{{ $country->country_name}}</a>
            </h2>
            @endforeach
        </body>
    </html>
</x-app-layout>