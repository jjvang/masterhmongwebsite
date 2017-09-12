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
// Can write it like this if you bring in the controller with --resume
// it would be easier this way so you do not have to write all the routes
// Route::resource('contact', 'MessagesController');

Route::get('/contact', 'MessagesController@getContact');
Route::post('/contact/submit', 'MessagesController@submit');
Route::get('/contact/{id}/edit', 'MessagesController@edit');
Route::put('/contact/{id}', 'MessagesController@update');
Route::delete('/contact/{id}', 'MessagesController@destroy');

Route::get('/gallery', 'AlbumsController@index');
Route::get('/gallery/create', 'AlbumsController@create');
Route::post('/gallery/store', 'AlbumsController@store');
Route::get('/gallery/{id}', 'AlbumsController@show');
Route::get('/gallery/{id}/edit', 'AlbumsController@edit');
Route::put('/gallery/{id}', 'AlbumsController@update');
Route::delete('/gallery/{id}', 'AlbumsController@destroy');


Route::get('/photos/create/{id}', 'PhotosController@create');
Route::post('/photos/store', 'PhotosController@store');
Route::get('/photos/{id}', 'PhotosController@show');
Route::delete('/photos/{id}', 'PhotosController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
