<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examination Paper Status</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        {{--  Default Laravel Template --}}
        {{--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Examination <br> Paper Status
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>--}}

        <header class="welcome-page-header">
            <div class="overlay"></div>
            <div class="header-wrapper">
                <div class="header-wrapper-inner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6 offset-lg-3 text-center ">
                                <h1 class="page-title"><span>Examination</span> Paper Status</h1>
                                <a class="btn btn-eps  btn-eps-default btn-eps-transparent" href="{{ route('login') }}">Login to continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- Scripts --}}
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    </body>
</html>
