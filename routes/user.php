<?php

\Route::group(['middleware' => ['user.values', 'cors']], function () {

    \Route::get('/tai-khoan/dang-nhap', 'User\WebController@signin')->name('signin');

    \Route::get('/tai-khoan/dang-ky', 'User\WebController@signup')->name('signup');

    \Route::group(['middleware' => 'user.language'], function () {
        \Route::get('/', 'User\WebController@index')->name('home');

        \Route::get('/tim-kiem', 'User\WebController@search')->name('search');
        
        \Route::get('/admin', 'User\WebController@navigate');

        \Route::get('/gioi-thieu', 'User\WebController@about')->name('about');

        \Route::get('/lien-he', 'User\WebController@contact')->name('contact');

        \Route::get('/gio-hang', 'User\WebController@cart')->name('cart');

        \Route::get('/checkout', 'User\WebController@checkout')->name('checkout');

        \Route::get('/tin-tuc', 'User\WebController@post')->name('post');

        \Route::get('/tin-tuc/{slug}', 'User\WebController@postDetail')->name('post-detail');

        \Route::get('/cua-hang', 'User\WebController@store')->name('store');
        
        \Route::get('/{slug}', 'User\WebController@detail')->name('detail');
    });

});

