<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container-fluid" style="padding:0 !important; margin: 0 !important;" id="app">
            <div class="row" style="padding:0 !important; margin: 0 !important;">
                <div class="col-md-12" style="padding:0 !important; margin: 0 !important;">
                    <display-data></display-data>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
