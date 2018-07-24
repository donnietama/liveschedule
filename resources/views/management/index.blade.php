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
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-bottom">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <span class="text-white mt-2">Keterangan:</span>
                        <li class="nav-item ml-2">
                            <div class="nav-link bg-warning text-dark text-capitalize">sedang diupdate</div>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn btn-primary text-white text-capitalize mr-1">
                        <span class="icon-sign-in"></span>
                        login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-warning text-capitalize">
                        <span class="icon-register"></span>
                        register
                    </a>
                </div>
          </nav>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
