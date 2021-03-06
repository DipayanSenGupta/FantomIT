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

Route::get('/', 'PostController@index');

Auth::routes();
Route::resource('posts','PostController');
Route::get('/home', 'PostController@home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('auth/facebook',['as'=>'auth/facebook','uses'=>'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback', ['as'=>'auth/facebook/callback','uses'=>'Auth\LoginController@handleProviderCallback']);

