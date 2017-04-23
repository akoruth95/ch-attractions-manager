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
    return view('layouts/master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/attractions/{category}', 'AttractionsController@getByCategory');

Route::get('/comments/{attraction_id}', 'CommentController@getComments');
Route::post('/comments', 'CommentController@createComment');
