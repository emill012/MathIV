<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

    </head>
    <body>
    			<h1><center>{{ $header }}</center></h1><hr>
    			<h3><center>{{ $answer }}</center></h3>
    			<p><center>{{ $message }}</center></p>
    			<h6><center>{{ $footer }}</center></h6>
    </body>
</html>