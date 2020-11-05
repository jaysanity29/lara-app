<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});

	Route::get('getPersonnels', 'API\UserController@getPersonnels');
	Route::post('storePersonnels', 'API\UserController@storePersonnels');
	Route::get('students', 'API\UserController@students');
	Route::patch('approveStudent/{id}', 'API\UserController@approveStudent');
	Route::patch('disapproveStudent/{id}', 'API\UserController@disapproveStudent');
	Route::get('countStudent', 'API\UserController@countStudent');
	Route::patch('updateRP/{id}', 'API\UserController@updateRP');
	Route::apiResources([
		'user' => 'API\UserController',
		'archive' => 'API\ArchiveController',
		'group' => 'API\GroupController',
	]);





