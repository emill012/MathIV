<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

    </head>
    <body>
    			@if(isset($header))
                  <h1><center>{{ $header }}</center></h1><hr>
            @else
            		<h1>A list of available Math Operations</h1>
            @endif
            
            @forelse($standardOps as $member => $operation)
            	 @if( $loop->first)
            	 	 <ul>
            	 @endif
                <li>Find {{ $member }} by typing {{ $operation }}</li>
                @if( $loop->last)
                	 </ul>
                @endif
                @empty
                <h2>No available operations</h2>
            @endforelse
            <hr>
            <h3><center><i>{{ $footer }}</i></center></h3>
            
            @if(isset($additional))
            	<h4><center>{{ $additional }}</center></h4>
            @else
            	<h4></h4>
            @endif
    </body>
</html>