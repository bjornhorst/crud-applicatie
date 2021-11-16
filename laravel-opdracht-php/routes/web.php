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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/artists', 'ArtistController@index');
Route::get('/artists/{artist}','ArtistController@show');
Route::post('/artists/songs/{artist}', 'SongController@add');
Route::patch('/songs/{song}', 'SongController@update')->name('songs.update');
Route::match(['get','patch'],'/songs/update/{id}','SongController@update');
Route::delete('/songs/{id}', 'SongController@delete');

Route::post('/artists/add', 'ArtistController@add');
Route::patch('/artists/{artist}', 'ArtistController@update')->name('artists.update');
Route::match(['get','patch'],'/artists/update/{id}','ArtistController@update');
Route::delete('/artists/{id}', 'ArtistController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
