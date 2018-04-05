<?php

// \Route::group(['namespace' => 'admin'], function() {

    \Route::group(['prefix' => 'admin', 'middleware' => ['admin.values']], function () {

        \Route::get('', 'Admin\IndexController@index');

        \Route::group(['middleware' => ['admin.guest']], function () {
            // \Route::get('signin', 'Admin\AuthController@getSignIn');
            // \Route::post('signin', 'Admin\AuthController@postSignIn');
            // \Route::get('forgot-password', 'Admin\PasswordController@getForgotPassword');
            // \Route::post('forgot-password', 'Admin\PasswordController@postForgotPassword');
            // \Route::get('reset-password/{token}', 'Admin\PasswordController@getResetPassword');
            // \Route::post('reset-password', 'Admin\PasswordController@postResetPassword');
        });

        \Route::group(['middleware' => ['admin.auth']], function () {
            // \Route::get('/home', 'Admin\IndexController@index');
        });

    });

// });