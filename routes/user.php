<?php

// \Route::group(['namespace' => 'user'], function() {

    \Route::group(['middleware' => ['user.values']], function () {

        \Route::get('/', 'User\HomeController@index')->name('home');

        // \Route::group(['middleware' => ['user.guest']], function () {
        \Route::get('account/signin', 'User\Auth\LoginController@showLoginForm')->name('getSignIn');
        \Route::post('account/signin', 'User\Auth\LoginController@login');
        \Route::get('account/logout', 'User\Auth\LoginController@logout')->name('getLogout');
        // \Route::get('signin/facebook', 'User\FacebookServiceAuthController@redirect');
        // \Route::get('signin/facebook/callback', 'User\FacebookServiceAuthController@callback');
        // \Route::get('forgot-password', 'User\PasswordController@getForgotPassword');
        // \Route::post('forgot-password', 'User\PasswordController@postForgotPassword');
        // \Route::get('reset-password/{token}', 'User\PasswordController@getResetPassword');
        // \Route::post('reset-password', 'User\PasswordController@postResetPassword');
        \Route::get('account/signup', 'User\AuthController@getSignUp')->name('getSignUp');
        // \Route::post('signup', 'User\AuthController@postSignUp');

        // });

        \Route::group(['middleware' => ['user.auth']], function () {

        });

        \Route::get('/p/{slug}', 'User\ProductController@detail')->name('product-detail');
        // \Route::get('/product-detail', 'User\ProductController@detail')->name('product-detail');
        \Route::get('/store', 'User\ProductController@store')->name('store');

        \Route::get('/cart', 'User\CartController@index')->name('cart');
        \Route::post('/cart/add', 'User\CartController@add')->name('cartAdd');
        \Route::post('/cart/update', 'User\CartController@update')->name('cartUpdate');
        \Route::post('/cart/delete', 'User\CartController@delete')->name('cartDelete');

        \Route::get('/article', 'User\ArticleController@index')->name('article');
        \Route::get('/a/{slug}', 'User\ArticleController@detail')->name('article-detail');

        \Route::get('/checkout/first', 'User\CartController@checkoutFirst')->name('step1');
        \Route::get('/checkout/info', 'User\CartController@checkoutInfo')->name('step2');
        \Route::get('/checkout/success', 'User\CartController@checkoutSuccess')->name('checkout-success');

        \Route::get('/about', 'User\PageController@about')->name('about');
        \Route::get('/contact', 'User\PageController@contact')->name('contact');

        \Route::get('/admin', function () {
            return redirect('/admin/login');
        });

    });

// });