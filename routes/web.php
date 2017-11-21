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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
    'uses' => 'BoardGamesController@index'
]);

Route::get('post/{id}', 'BoardGamesController@view')->name('post.view');

Route::get('game/{id}', 'BoardGamesController@show')->name('game.show');
