<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <style>
            .fakeimg { height: 100px; background: #aaa; }
        </style>

        <title>My INE project</title>
    </head>

    <body>

        <!-- LAYOUT: HEADER -->
        @include('layouts.header')

        <!-- LAYOUT: CENTER -->
        <!-- SECTION: Content-Center -->
        @yield('content-center')

        <!-- SECTION: Content-Right -->
        @yield('content-right')

        <!-- LAYOUT: FOOTER -->
        @include('layouts.footer')

        <!-- Loading Javascripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
