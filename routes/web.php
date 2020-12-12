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
    Route::get('post/create', 'Admin\PostController@add');
    Route::post('post/create', 'Admin\PostController@create');
    Route::get('post/edit', 'Admin\PostController@edit');
    Route::get('post', 'Admin\PostController@index');
    Route::get('post/edit','Admin\PostController@edit');
    Route::post('post/edit','Admin\PostController@update');
    Route::get('post/delete','Admin\PostController@delete');
});

//Route::get('post/create', 'Admin\PostController@add');は、post/createにアクセスが来たらAdmin\PostControllerのaddアクションに渡すことを表している

Auth::routes();

Route::get('post','PostController@index');
Route::get('post/show','PostController@show');
Route::get('post/about','PostController@about');