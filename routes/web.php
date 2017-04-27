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
  if (Auth::guest())
  {
    return view('auth/login');
  }
  else {
    return view('home');
  }
});

Route::get('/style', function () {
    return view('layouts/styleguide');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/attractions/{category}', 'AttractionsController@getByCategory');

Route::get('/comments/{attraction_id}', 'CommentController@getComments');
Route::post('/comments', 'CommentController@createComment');

Route::post('/favorites/{attraction_id}', 'FavoritesController@createFavorite');
Route::get('/favorites', 'FavoritesController@getAllFavorites');
Route::get('/favorites/{attraction_id}', 'FavoritesController@getFavorite');
Route::delete('/favorites/{attraction_id}', 'FavoritesController@destroyFavorite');
