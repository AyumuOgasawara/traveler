<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Traveler</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Choose Country</h1>
        <div class='countries'>
            @foreach ($countries as $country)
                <div class='country'>
                    <h2 class='country_name'>
                        <a href="/countries/{{ $country->id }}">{{ $country->country_name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </body>
</html>