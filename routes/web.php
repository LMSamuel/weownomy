<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Film Routes
Route::get('/','FilmController@index')->name('index');
Route::get('/film/{id}','FilmController@show')->name('show');
Route::get('/film/{id}/critiques','FilmController@getCritics')->name('critics');
Route::get('/lespluscritiques','FilmController@latest')->name('latest');
Route::get('/film/{id}/note','FilmController@getNote')->name('note');

//Subscribed Routes

Route:: resource('subscribed_movies','SubscribedMovieController');

