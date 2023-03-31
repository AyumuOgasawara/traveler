<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Traveler</title>
            <!-- Fonts -->
            <script src="https://maps.googleapis.com/maps/api/js?key={{config('services.map_api')}}&language=ja&region=JP"></script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script src="{{ asset('js/app.js') }}"></script>
            <link href="{{ secure_asset('/css/top_index.css') }}" rel="stylesheet">
        </head>
        <body>
            <div class="top_page">
                <div class="map">
                    <div class="regions_div" id="regions_div"></div>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>