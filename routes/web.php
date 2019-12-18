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
    return view('frontend.layout.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
	'prefix'=>'admin',
	'namespace'=>'Admin',
], function(){
	Route::get('/dashboard','AdminController@index')->name('dashboard');
	Route::get('/profile','AdminController@showProfile')->name('show.profile');
});