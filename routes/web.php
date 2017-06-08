<?php

use Illuminate\Support\Facades\Storage;

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
// Route::get('/generate/models', '\\Jimbolino\\Laravel\\ModelBuilder\\ModelGenerator5@start');

// Route::get('/', function () {
// 	return view('vue');
// });

/*Route::get('/test',function(){
	return view('test',['company'=>'Techtatva']);
});*/

// Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::resource('file','File\FileController');


Route::get('delete',function(){
	 return redirect()->route('file.index')->with('message',"One item deleted");
	
});

// Route::group(['prefix'=>'ui'],function(){
	// 	Route::get('/',function(){
	// 		return view('pages.ui.cardlayout');
	// 	});
// });