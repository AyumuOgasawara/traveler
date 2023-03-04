<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Traveler</title>
            <!-- Fonts -->
            <script src="https://maps.googleapis.com/maps/api/js?key={{config('services.map_api')}}&language=ja&region=JP"></script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script src="{{ asset('js/app.js') }}"></script>
        </head>
        <body>
            <div>
                <a href='/home'>{{ Auth::user()->name }}さんの投稿一覧</a>
            </div>
            <div id="regions_div" style="width: 80%; height: 80%;"></div>
        </body>
    </html>
</x-app-layout>