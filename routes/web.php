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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');


Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function() {
	Route::get('/dashboard', function() {
		return view('layouts.master');
	});
});

Route::group(['prefix' => 'student', 'middleware' => ['auth', 'student']], function() {
	Route::get('/dashboard', function() {
		return view('layouts.student');
	});
	Route::get('/research-archive', function() {
		return view('layouts.student');
	});
});

Route::get('{any}', function () {
    return view('home');
})->where('any','.*');
