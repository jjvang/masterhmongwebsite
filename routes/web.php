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
    return view('home');
});

Route::get('/contact', function(){
  return view('contact');
});

Route::get('/gallery', 'AlbumsController@index');
Route::get('/gallery/create', 'AlbumsController@create');
Route::post('/gallery/store', 'AlbumsController@store');
Route::get('/gallery/{id}', 'AlbumsController@show');

Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');
