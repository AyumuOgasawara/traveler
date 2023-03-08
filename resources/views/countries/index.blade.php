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
            <link href="{{ secure_asset('/css/top_index.css') }}" rel="stylesheet">
        </head>
        <body>
            <div class="top_page">
                <div "user_name">
                    <a href='/home'>{{ Auth::user()->name }}さんの投稿一覧</a> <!--ユーザーの名前を表示&クリック後ユーザーの投稿一覧へ遷移-->
                </div>
                <div class="map">
                    <div class="regions_div" id="regions_div"></div>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>