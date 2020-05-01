<?php

// \Route::group(['namespace' => 'user'], function() {

    \Route::group(['middleware' => ['user.values', 'cors']], function () {

        \Route::get('/', 'User\HomeController@index')->name('home');

        // \Route::group(['middleware' => ['user.guest']], function () {
        \Route::get('tai-khoan/dang-nhap', 'User\Auth\LoginController@showLoginForm')->name('signin');
        \Route::post('tai-khoan/dang-nhap', 'User\Auth\LoginController@login');
        \Route::get('tai-khoan/dang-xuat', 'User\Auth\LoginController@logout')->name('getLogout');
        // \Route::get('signin/facebook', 'User\FacebookServiceAuthController@redirect');
        // \Route::get('signin/facebook/callback', 'User\FacebookServiceAuthController@callback');
        // \Route::get('forgot-password', 'User\PasswordController@getForgotPassword');
        // \Route::post('forgot-password', 'User\PasswordController@postForgotPassword');
        // \Route::get('reset-password/{token}', 'User\PasswordController@getResetPassword');
        // \Route::post('reset-password', 'User\PasswordController@postResetPassword');
        \Route::get('tai-khoan/dang-ky', 'User\Auth\RegisterController@showRegistrationForm')->name('signup');
        \Route::post('tai-khoan/dang-ky', 'User\Auth\RegisterController@register');

        \Route::post('account/ajax_signin', 'User\AuthController@ajaxSignIn')->name('ajax-signin');
        \Route::post('account/ajax_signup', 'User\AuthController@ajaxSignUp')->name('ajax-signup');

        // });

        \Route::group(['middleware' => ['user.auth']], function () {

        });

        \Route::get('/cua-hang', 'User\ProductController@store')->name('store');
        \Route::get('/tim-kiem', 'User\ProductController@search')->name('search');

        \Route::get('/gio-hang', 'User\CartController@index')->name('cart');
        \Route::post('/cart/add', 'User\CartController@add')->name('cartAdd');
        \Route::post('/cart/update', 'User\CartController@update')->name('cartUpdate');
        \Route::post('/cart/delete', 'User\CartController@delete')->name('cartDelete');

        \Route::get('/tin-tuc', 'User\ArticleController@index')->name('article');
        \Route::get('/tin-tuc/{slug}', 'User\ArticleController@detail')->name('article-detail');

        \Route::get('/checkout/first', 'User\CartController@checkoutFirst')->name('step1');
        \Route::get('/checkout/payment', 'User\CartController@checkoutPayment')->name('step2');
        \Route::post('/checkout/payment', 'User\CartController@postCheckoutPayment')->name('postStep2');
        \Route::get('/checkout/success', 'User\CartController@checkoutSuccess')->name('checkout-success');

        \Route::get('/gioi-thieu', 'User\PageController@about')->name('about');
        \Route::get('/phuong-thuc-thanh-toan', 'User\PageController@paymentMethod')->name('payment-method');
        \Route::get('/phuong-thuc-van-chuyen', 'User\PageController@deliveryMethod')->name('delivery-method');
        \Route::get('/chinh-sach', 'User\PageController@policy')->name('policy');
        \Route::get('/thong-tin-tuyen-dung', 'User\PageController@recruitment')->name('recruitment');
        \Route::get('/chuong-trinh-khuyen-mai', 'User\PageController@saleOff')->name('saleoff');
        \Route::get('/lien-he', 'User\PageController@contact')->name('contact');

        \Route::get('/{slug}', 'User\ProductController@detail')->name('product-detail');

        \Route::post('/rating/post', 'Admin\ReviewController@add')->name('postRating');

    });

// });

