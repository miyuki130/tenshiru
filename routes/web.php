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

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function() {
    Route::get('post/create', 'Admin\PostController@create');
    Route::post('post/create', 'Admin\PostController@post');
    Route::get('post/edit', 'Admin\PostController@edit');
    Route::get('post/list', 'Admin\PostController@list');
});

Route::get('post/login', 'PostController@login');
Route::get('post/', 'PostController@index');
Route::get('post/detail', 'PostController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
