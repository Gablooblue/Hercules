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


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/info', 
	['as' => 'info_show', 'uses' => 'InfoController@show']);

Route::post('/info',
	['as' => 'info_update', 'uses' => 'InfoController@update']);

Route::get('/posts', 'PostController@showPosts');

Route::get('/create', 
	['as' => 'create_show', 'uses' =>'PostController@showCreate']);

Route::post('/create',
	['as' => 'create_post', 'uses' =>'PostController@create']);
