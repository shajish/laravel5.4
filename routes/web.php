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
	return view('vue');
});

Route::get('/chat',function(){
	return view('chat');
});

Route::get('/test',function(){

	return view('test',['company'=>'Techtatva']);
});
Auth::routes();

Route::get('/home', 'HomeController@index');
