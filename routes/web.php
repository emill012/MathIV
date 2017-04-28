<?php

/*
|--------------------------------------------------------------------------
| Web Routes Math2
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'General@index');
Route::get('/random', 'General@random');
Route::get('/random/{high}', 'General@randomHigh');
Route::get('/random/{low}/{high}', 'General@randomLowHigh');
Route::get('/constant/PI', 'General@constantPI');
Route::get('/constant/e', 'General@constante');

Route::get('/math', 'Math@index');
Route::get('/math/add/{x}/{y}', 'Math@addition');
Route::get('/math/subtract/{x}/{y}', 'Math@subtraction');
Route::get('/math/multiply/{x}/{y}', 'Math@multiplication');
Route::get('/math/divide/{x}/{y}', 'Math@division');

Route::get('/func', 'Func@index');
Route::get('/func/sqrt/{x}', 'Func@squareRoot');
Route::get('/func/log/{x}', 'Func@logX');

Route::get('/courses', 'Schedule@index');
Route::get('/table/{course}', 'Schedule@table');

/*
Working Closures

Route::get('/', function () {
    $message = "Let's Do Math!";
    return $message;
});

Route::get('/math/add/{x}/{y}', function ($x,$y) {
    $message = $x+$y;
    return "$x + $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/math/subtract/{x}/{y}', function ($x,$y) {
    $message = $x-$y;
    return "$x - $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/math/multiply/{x}/{y}', function ($x,$y) {
    $message = $x*$y;
    return "$x x $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/math/divide/{x}/{y}', function ($x,$y) {
    $message = $x/$y;
    return "$x / $y = $message";
})->where ([
			'x'=>'[-\+]?[0-9]+',
			'y'=>'[-\+]?[0-9]+'
			]);

Route::get('/function/sqrt/{x}', function ($x) {
    $message = sqrt($x);
    return "Square Root of $x = $message";
})->where = ('x','[-\+]?[0-9]+');

Route::get('/function/log/{x}', function ($x) {
    $message = log10($x);
    return "The log of x = $message";
})->where = ('x','[-\+]?[0-9]+');

Route::get('/constant/PI', function () {
    $message = pi();
    return "PI = $message";
});

Route::get('/constant/e', function () {
    $message = M_E;
    return "Constant of e = $message";
});

Route::get('/random', function () {
    echo rand();
});

Route::get('/random/{high}', function ($high) {
    echo rand(1,$high);
});

Route::get('/random/{low}/{high}', function ($low,$high) {
    echo rand($low,$high);
});
*/