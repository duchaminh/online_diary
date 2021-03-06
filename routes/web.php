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
Route::get('login',function(){
	return view("login");
});
Route::post('login',"loginController@checkLogin");
Route::get('register',function(){
	return view("register");
});
Route::post('register','loginController@register');
Route::get('logout','loginController@logout');
Route::group(['middleware'=>'user'],function(){
	Route::get('home','User\PostController@home');
	Route::get('newPost','User\PostController@showNewPost');
	Route::post('createPost','User\PostController@createPost');
});

