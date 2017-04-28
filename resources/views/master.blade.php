<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSMP -- @yield('subject')</title>

    </head>
    <body>
            <h1>@yield('subject')</h1>
            <hr>
            @yield('content')
            <hr>
            @yield('footer', 'The Default Footer')
            @yield('link', "<p>No link specified</p>")

    </body>
</html>
