<?php

// \Route::group(['namespace' => 'user'], function() {
// \Route::group(['domain' => config('app.user_public_domain')], function() {

    \Route::group(['middleware' => ['user.values']], function () {

        \Route::get('/', 'User\HomeController@index')->name('home');

        \Route::group(['middleware' => ['user.guest']], function () {
            // \Route::get('signin', 'User\AuthController@getSignIn');
            // \Route::post('signin', 'User\AuthController@postSignIn');
            // \Route::get('signin/facebook', 'User\FacebookServiceAuthController@redirect');
            // \Route::get('signin/facebook/callback', 'User\FacebookServiceAuthController@callback');
            // \Route::get('forgot-password', 'User\PasswordController@getForgotPassword');
            // \Route::post('forgot-password', 'User\PasswordController@postForgotPassword');
            // \Route::get('reset-password/{token}', 'User\PasswordController@getResetPassword');
            // \Route::post('reset-password', 'User\PasswordController@postResetPassword');
            // \Route::get('signup', 'User\AuthController@getSignUp');
            // \Route::post('signup', 'User\AuthController@postSignUp');
        });

        \Route::group(['middleware' => ['user.auth']], function () {

        });

        \Route::get('/article', 'User\ArticleController@index')->name('article');
        \Route::get('/a/{slug}', 'User\ArticleController@detail')->name('article-detail');

        \Route::get('/p/{slug}', 'User\ProductController@index')->name('product-detail');
        \Route::get('/{sex}', 'User\ProductController@store')->name('product-store');

        \Route::get('/brand/all', 'User\HomeController@brand')->name('brand');

        \Route::get('/product/getAllFeatureProd', 'User\ProductController@getAllFeatureProd')->name('getAllFeatureProd');
        \Route::get('/product/getAllCateProd', 'User\ProductController@getAllCateProd')->name('getAllCateProd');

    });

// });