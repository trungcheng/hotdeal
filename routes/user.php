<?php

// \Route::group(['namespace' => 'user'], function() {

    \Route::group(['middleware' => ['user.values']], function () {

        \Route::get('/', 'User\HomeController@index')->name('home');

        // \Route::group(['middleware' => ['user.guest']], function () {
            \Route::get('signin', 'User\AuthController@getSignIn')->name('getSignIn');
            // \Route::post('signin', 'User\AuthController@postSignIn');
            // \Route::get('signin/facebook', 'User\FacebookServiceAuthController@redirect');
            // \Route::get('signin/facebook/callback', 'User\FacebookServiceAuthController@callback');
            // \Route::get('forgot-password', 'User\PasswordController@getForgotPassword');
            // \Route::post('forgot-password', 'User\PasswordController@postForgotPassword');
            // \Route::get('reset-password/{token}', 'User\PasswordController@getResetPassword');
            // \Route::post('reset-password', 'User\PasswordController@postResetPassword');
            \Route::get('signup', 'User\AuthController@getSignUp')->name('getSignUp');
            // \Route::post('signup', 'User\AuthController@postSignUp');

        // });

        \Route::group(['middleware' => ['user.auth']], function () {

        });

        \Route::get('/product-detail', 'User\ProductController@detail')->name('product-detail');
        \Route::get('/store', 'User\ProductController@store')->name('store');

        \Route::get('/cart', 'User\CartController@index')->name('cart');

        \Route::get('/checkout-success', 'User\PageController@checkoutSuccess')->name('checkout-success');
        \Route::get('/about', 'User\PageController@about')->name('about');
        \Route::get('/contact', 'User\PageController@contact')->name('contact');

    });

// });