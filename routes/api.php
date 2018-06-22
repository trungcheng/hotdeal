<?php

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

\Route::group(['prefix' => 'v1'], function () {
	
	\Route::post('auth/register', 'API\ApiAppController@register');
	\Route::post('auth/login', 'API\ApiAppController@login');

	\Route::group(['middleware' => 'jwt.auth'], function () {
	    \Route::get('user', 'API\ApiAppController@getUserInfo');

	    //music
	    \Route::post('create', 'API\ApiAppController@create_playlist');
	    \Route::post('list/playlist', 'API\ApiAppController@getPlaylist');
	    \Route::post('list/addplaylist', 'API\ApiAppController@AddToPlaylist');

	});

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});