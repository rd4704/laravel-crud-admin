<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    return  ['alive' => true];
});

Route::get('/primeFactors', 'PrimeFactorController@powerOfTwo');

Route::get(
    '/minesweeper',
    [
        'as' => 'minesweeper',
        'uses' => 'WebController@index',
    ]
);


Route::get(
    '/readme',
    [
        'as' => 'readme',
        'uses' => 'WebController@readme',
    ]
);

Route::get(
    '/astroport',
    [
        'as' => 'astroport',
        'uses' => 'WebController@astroport',
    ]
);

Route::get(
    '/contact',
    [
        'as' => 'contact',
        'uses' => 'WebController@contact',
    ]
);
