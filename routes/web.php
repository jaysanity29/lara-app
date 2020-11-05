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


Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth']);

Route::get('/pending-account', 'HomeController@approval')->name('approval')->middleware(['auth']);
Route::get('/new-account', 'HomeController@newaccount')->name('newaccount')->middleware(['auth','student']);
Route::group(['prefix' => 'student', 'middleware' => ['auth', 'student', 'approved']], function() {
	

	Route::get('/dashboard', function() {
		return view('layouts.student');
	});
	Route::get('/research-archive', function() {
		return view('layouts.student');
	});
	Route::get('/schedule', function() {
		return view('layouts.student');
	});
	Route::get('/chat', function() {
		return view('layouts.student');
	});
	
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function() {


	Route::get('/dashboard', function() {
		return view('layouts.master');
	});
	Route::get('/schedule', function() {
		return view('layouts.master');
	});
	Route::get('/archive', function() {
		return view('layouts.master');
	});
	Route::get('/profile', function() {
		return view('layouts.master');
	});
	Route::get('/chat', function() {
		return view('layouts.master');
	});
	Route::get('/manage/students', function() {
		return view('layouts.master');
	});
	Route::get('/manage/subject-teacher', function() {
		return view('layouts.master');
	});
	Route::get('/manage/research-personnel', function() {
		return view('layouts.master');
	});
	Route::get('/manage/capstone-one', function() {
		return view('layouts.master');
	});
	Route::get('/manage/capstone-two', function() {
		return view('layouts.master');
	});
	Route::get('/manage/research-personnel', function() {
		return view('layouts.master');
	});

});

Route::group(['prefix' => 'research-personnel', 'middleware' => ['auth', 'research-personnel', 'approved']], function() {
	
	Route::get('/dashboard', function() {
		return view('layouts.personnel');
	});
	
});
// Student Route
Route::group(['middleware' => ['auth','web', 'student']], function () {
	Route::post('/create-group', 'StudentController@createGroup');
	Route::post('/join-group', 'StudentController@joinGroup');
});

Route::get('/profile', 'ProfileController@getUser');