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
	\Route::get('list/getAllSong', 'API\ApiAppController@getAllSong');
	\Route::get('list/getListSong', 'API\ApiAppController@getListSongInPlaylist');
	\Route::get('list/playlistDetail', 'API\ApiAppController@getPlaylistDetail');

	\Route::group(['middleware' => 'jwt.auth'], function () {
	    \Route::get('user', 'API\ApiAppController@getUserInfo');
	    //music
	    \Route::post('list/create', 'API\ApiAppController@createPlaylist');
	    \Route::get('list/getPlaylist', 'API\ApiAppController@getPlaylist');
	    \Route::post('list/addOneSong', 'API\ApiAppController@addOneSongToPlaylist');
	    \Route::post('list/editPlaylist', 'API\ApiAppController@editPlaylist');
	    \Route::post('list/deletePlaylist', 'API\ApiAppController@deletePlaylist');

	});

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});