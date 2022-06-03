<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style type="text/css">
            div {
                width: 50%;
                display: inline;
                float: left;
                position: relative;
                height: auto;
                margin: 2% 25%;
            }
        </style>
    </head>
    <body class="antialiased">
       @yield('content')
    </body>
</html>
