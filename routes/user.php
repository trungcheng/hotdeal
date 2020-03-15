<?php

// \Route::group(['namespace' => 'user'], function() {

    \Route::group(['middleware' => ['user.values', 'cors']], function () {
        \Route::get('/', 'User\HomeController@index')->name('home');
    });

// });

