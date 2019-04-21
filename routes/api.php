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
	\Route::post('auth/password/forgot', 'API\ApiAppController@forgotPwd');
	\Route::get('auth/forgotPwd/confirm', 'API\ApiAppController@confirmForgotPwd');
	\Route::post('auth/forgotPwd/reset', 'API\ApiAppController@resetForgotPwd');

	\Route::group(['middleware' => 'jwt.auth'], function () {
	    \Route::get('user', 'API\ApiAppController@getUserInfo');
	    \Route::post('user/updateInfo', 'API\ApiAppController@updateUserInfo');
	    \Route::post('user/updateAvatar', 'API\ApiAppController@updateUserAvatar');
	});

});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });