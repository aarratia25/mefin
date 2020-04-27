<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <meta name="description" content="{{ config('app.description') }}">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        
        <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">
        
        @yield('css_after')
    </head>
    <body>
        <!-- Page Container -->
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Dashmix Core JS -->
        <script src="{{ mix('js/dashmix.app.js') }}"></script>

        @yield('js_after')
    </body>
</html>