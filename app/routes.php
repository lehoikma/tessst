<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('authen/login',['as'=>'getlogin','uses'=>'Thanhviencontroller@getlogin']);
Route::post('authen/login',['as'=>'getlogin','uses'=>'Thanhviencontroller@postlogin']);

Route::get('dangky',['as'=>'dangky','uses'=>'HomeController@dangky']);
Route::post('postdangky',['as'=>'postdangkyy','uses'=>'HomeController@postdangky']);

Route::get('/login', 'HomeController@index');
Route::post('/postlogin', 'HomeController@login');
Route::get('/iddd',function(){
	return View::make('client');
});
Route::get('admin',function(){
	return View::make('admin');
});
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('login');
});
Route::get('addpage',function(){
	return View::make('Admin.addpage');
});
Route::post('/postaddpage', 'HomeController@postaddpage');

Route::get('/admin','HomeController@admin');

Route::get('/tintuc','HomeController@tintuc');

Route::get('profile/{id}','HomeController@edit');
Route::get('delete/{id}','HomeController@delete');
Route::post('update/{id}','HomeController@update');
Route::post('profile/postedit','HomeController@postedit');


Route::group(array('before' => 'auth'), function()
{
	\Route::get('elfinder', 'TSF\ElfinderLaravel\ElfinderController@showIndex');
	\Route::any('elfinder/connector', 'TSF\ElfinderLaravel\ElfinderController@showConnector');
});

Route::get('demotest',function(){
	return View::make('Admin.login');
});